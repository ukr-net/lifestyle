<?php namespace App\Services;

use App\Slider;

class SliderService extends Service
{
    public function __construct(Slider $slider) {
        $this->model = $slider;
    }

    public function getSliderItems() {
        $items = $this->getAll();
        $items->transform(function($item, $key){
            $item->image = config('settings.slider_dir') . '/' . $item->image;
            return $item; 
        });
        return $items;
    }
}