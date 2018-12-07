<?php namespace App\Services;

abstract class Service {
    protected $model;

    public function getAll() {
        return $this->model::all();
    }

    public function getActive() {
        return $this->model::where('active', 1)->get();
    }

    public function getAllWith(String $joinModel) {
        return $this->model::with($joinModel)->get();
    }

    public function getNumberOf($limit, $order = 'first') {
        $order = $order == 'last' ? 'desc' : 'asc';
        return $this->model::select('*')
                    ->orderBy('id', $order)
                    ->limit($limit)
                    ->get();
    }
}