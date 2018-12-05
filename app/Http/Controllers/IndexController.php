<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\SliderService;

class IndexController extends SiteController
{
    private $slider;

    public function __construct(
        MenuService $menuService,
        SliderService $sliderService
    ) {
        parent::__construct($menuService);

        $this->template = 'index';
        $this->sliderService = $sliderService;
    }

    public function index() {
        $this->createSlider();
        $this->addTemplateVariable('homePage', true);

        return $this->render();
    }

    private function createSlider() {
        $sliderItems = $this->sliderService->getSliderItems();
        $slideShow = view(env('THEME') . '.slide-show')->with(['sliderItems' => $sliderItems])->render();
        $this->addTemplateVariable('slideShow', $slideShow);
    }
}
