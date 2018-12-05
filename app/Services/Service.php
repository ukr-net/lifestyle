<?php namespace App\Services;

abstract class Service {
    protected $model;

    public function get() {
        $builder = $this->model->select('*');
        return $builder->get();
    }
}