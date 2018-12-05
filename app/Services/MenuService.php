<?php namespace App\Services;

use App\Menu;
use Menu as LaravelMenu;

class MenuService extends Service
{
    public function __construct(Menu $menu) {
        $this->model = $menu;
    }

    public function getMenu() {
        $collectionMenuItems = $this->get();

        $builder = LaravelMenu::make('topMenu', function($menu) use($collectionMenuItems) {
            foreach ($collectionMenuItems as $item) {
                if ($item->parent == 0) {
                    $menuItem = $menu->add($item->title, $item->url)->id($item->id)->data('ico', $item->ico);
                } else {
                    if ($menu->find($item->parent)) {
                        $menu->find($item->parent)->add($item->title, $item->url)->id($item->id);
                    }
                }
            }
        });

        return $builder;
    }
}