<?php namespace App\Services;

abstract class Service {
    protected $model;

    public function getAll() {
        return $this->model->select('*')->get();
    }

    public function getActive() {
        return $this->model::where('active', 1)->get();
    }
}