<?php namespace App\Services;

use App\Feature;

class FeatureService extends Service
{
    public function __construct(Feature $feature) {
        $this->model = $feature;
    }

    public function getFeature($alias) {
        return $this->model::where('alias', $alias)->firstOrFail();
    }
}