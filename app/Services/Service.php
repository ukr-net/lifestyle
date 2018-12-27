<?php namespace App\Services;

use Carbon\Carbon;

abstract class Service {
    protected $model;

    public function getAll() {
        return $this->model::all();
    }

    public function get($params = []) {
        $defaultParams = [
            'select' => '*',
            'alias' => false,
            'date' => false,
            'with' => [],
            'withCount' => [],
            'order' => [],
            'limit' => false,
            'whereHas' => [],
            'paginate' => false,
            'result' => 'get'
        ];

        $params = array_merge($defaultParams, $params);

        $builder = $this->model->select($params['select']);

        if ($params['alias']) {
            $builder->where('alias', $params['alias']);
        }

        if ($params['date']) {
            if ($createdDate = Carbon::createFromFormat('Y-m-d', $params['date'])) {
                $builder->whereBetween('created_at', [
                    $createdDate->startOfDay()->format('Y-m-d H:i:s'), 
                    $createdDate->endOfDay()->format('Y-m-d H:i:s')
                ]);
            }
        }

        if ($params['with'] && is_array($params['with'])) {
            foreach ($params['with'] as $property) {
                if (array_key_exists($property, $params['whereHas'])) {
                    list($column, $value) = $params['whereHas'][$property];
                    $builder->whereHas($property, function ($query) use ($column, $value) {
                        $query->where($column, $value);
                    });
                } else {
                    $builder->with($property);
                } 
            }
        }

        if ($params['withCount'] && is_array($params['withCount'])) {
            foreach ($params['withCount'] as $property) {
                $builder->withCount($property);
            }
        }

        if ($params['order'] && is_array($params['order'])) {
            foreach ($params['order'] as $column => $order) {
                $order = $order == 'desc' ? 'desc' : 'asc';
                $builder->orderBy($column, $order);
            }
        }

        if ($params['limit']) {
            $builder->limit(intval($params['limit']));
        }

        if ($params['paginate']) {
            return $builder->paginate(intval($params['paginate']));
        }

        if ($params['result'] == 'firstOrFail') return $builder->firstOrFail();

        return $builder->get();
    }

    protected function updateImgPath($items, $path, $extraImgName = false, $extraImgPath = false) {
        if (!$items) return null;

        $items->transform(function($item, $key) use($path, $extraImgName, $extraImgPath) {
            if ($extraImgName && $extraImgPath) $item->{$extraImgName} = $extraImgPath . '/' . $item->image;
            $item->image = $path . '/' . $item->image;
            return $item; 
        });
        
        return $items;
    }

    public function add($data) {
        $model = new $this->model;
        $model->fill($data);
        return $model->save();
    }

    public function delete($id) {
        $model = $this->model::find($id);

        if ($model) {
            return $model->delete();
        }

        return false;
    }

    public function update($id, $data) {
        $model = $this->model::find($id);

        if ($model) {
            $model->fill($data);
            return $model->save();
        }

        return false;
    }
}