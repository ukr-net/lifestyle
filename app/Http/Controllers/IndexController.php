<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\SliderService;
use App\Services\PortfolioService;

class IndexController extends SiteController
{
    private $slider;

    public function __construct(
        MenuService $menuService,
        SliderService $sliderService,
        PortfolioService $portfolioService
    ) {
        parent::__construct($menuService);
        
        $this->sliderService = $sliderService;
        $this->portfolioService = $portfolioService;

        $this->template = 'index';
    }

    public function index() {
        $slideShow = $this->getRenderedSlideShow();
        $portfolio = $this->portfolioService->getPorfolio(8);

        $this->addTemplateVariable('slideShow', $slideShow);
        $this->addTemplateVariable('portfolio', $portfolio);
        $this->addTemplateVariable('homePage', true);

        return $this->render();
    }

    private function getRenderedSlideShow() {
        $sliderItems = $this->sliderService->getSliderItems();
        return view(env('THEME') . '.slider.slide-show')->with(['sliderItems' => $sliderItems])->render();
        
    }
}
