<?php namespace App\Services;

abstract class Service {
    protected $model;

    public function getAll() {
        return $this->model::all();
    }

    public function get($params = []) {
        $defaultParams = [
            'select' => '*',
            'alias' => false,
            'with' => [],
            'order' => [],
            'limit' => 0,
            'result' => 'get'
        ];

        $params = array_merge($defaultParams, $params);

        $builder = $this->model->select($params['select']);

        if ($params['alias']) {
            $builder->where('alias', $params['alias']);
        }

        if ($params['with'] && is_array($params['with'])) {
            foreach ($params['with'] as $property) {
                $builder->with($property);
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

        if ($params['result'] == 'firstOrFail') return $builder->firstOrFail();

        return $builder->get();
    }
}