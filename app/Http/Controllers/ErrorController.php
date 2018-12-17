<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;

class ErrorController extends SiteController
{
    public function __construct(
        MenuService $menuService
    ) {
        parent::__construct($menuService);
    }

    public function pageNotFound() {
        $this->template = '404';
        return parent::render();
    }

    public function modelNotFound() {
        $this->template = '404';
        return parent::render();
    }
}
