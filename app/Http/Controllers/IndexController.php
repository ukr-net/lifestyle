<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Menu;

class IndexController extends SiteController
{
    public function __construct(MenuService $menuService) {
        parent::__construct($menuService);

        $this->template = 'index';
    }

    public function index() {
        return $this->render();
    }
}
