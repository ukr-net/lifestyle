<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\FeatureService;

class FeatureController extends SiteController
{
    private $featureService;
    private $menuService;

    public function __construct(
        MenuService $menuService,
        FeatureService $featureService
    ) {
        parent::__construct($menuService);

        $this->template = 'features';
        $this->featureService = $featureService;
        $this->menuService = $menuService;
    }

    private function getSidebarMenu() {
        $sidebarMenu = $this->menuService->getFeaturesMenu();
        return view(env('THEME') . '.sidebars.sidebar-menu.sidebar-menu')->with(['sidebarMenu' => $sidebarMenu])->render();
    }

    public function index($alias) {
        $feature = $this->featureService->getFeature($alias);
        $this->addTemplateVariable('feature', $feature);

        $sidebarMenu = $this->getSidebarMenu();
        $this->addTemplateVariable('sidebarMenu', $sidebarMenu);

        return $this->render();
    }
}
