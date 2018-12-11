<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\PortfolioService;
use App\Services\FilterService;

class PortfolioController extends SiteController
{
    private $portfolioService;
    private $filterService;

    public function __construct(
        MenuService $menuService,
        PortfolioService $portfolioService,
        FilterService $filterService
    ) {
        parent::__construct($menuService);

        $this->portfolioService = $portfolioService;
        $this->filterService = $filterService;
        $this->template = 'portfolio';
    }

    public function index() {
        $portfolios = $this->portfolioService->getPorfolioWithFilters();
        $this->addTemplateVariable('portfolios', $portfolios);

        $filters = $this->filterService->getFilters();
        $this->addTemplateVariable('filters', $filters);

        return $this->render();
    }
}
