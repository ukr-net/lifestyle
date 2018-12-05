<?php namespace App\Services;

use App\Menu;

class MenuService extends Service
{
    public function __construct(Menu $menu) {
        $this->model = $menu;
    }

    public function getMenu() {
        return $this->get();
    }
}