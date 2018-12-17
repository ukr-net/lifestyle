<?php namespace App\Services;

use App\Menu;
use Menu as LaravelMenu;

class MenuService extends Service
{
    public function __construct(Menu $menu) {
        $this->model = $menu;
    }

    public function getMenu() {
        $collectionMenuItems = $this->getAll();

        return LaravelMenu::make('topMenu', function($menu) use($collectionMenuItems) {
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
    }

    public function getFeaturesMenu() {
        $collectionMenuItems = $this->getAll();

        $menuItemFeatures = $collectionMenuItems->first(function($value, $key){
            return $value->title == 'Features';
        });

        if (!$menuItemFeatures) return false;

        return LaravelMenu::make('fetauresSidebarMenu', function($menu) use($collectionMenuItems, $menuItemFeatures) {
            foreach ($collectionMenuItems as $item) {
                if ($item->parent == $menuItemFeatures->id) {
                    $menu->add($item->title, $item->url)->id($item->id)->data('ico', $item->ico);
                } else {
                    if ($menu->find($item->parent)) {
                        $menu->find($item->parent)->add($item->title, $item->url)->id($item->id)->data('ico', $item->ico);
                    }
                }
            }
        });
    }

    public function getAdminMenu() {
        return LaravelMenu::make('adminMenu', function($menu) {
                $menu->add('home', route('admin.home'));
                $menu->add('menu', route('admin.home'));
                $menu->add('features', route('admin.home'));

                $menuItem = $menu->add('portfolio', '');
                $menuItem->add('Filters', route('admin.home'));
                $menuItem->add('Portfolios', route('admin.home'));

                $menuItem = $menu->add('blog', '');
                $menuItem->add('Tags', route('admin.home'));
                $menuItem->add('Posts', route('admin.home'));
                $menuItem->add('Comments', route('admin.home'));

                $menuItem = $menu->add('Users', '');
                $menuItem->add('Users', route('admin.home'));
                $menuItem->add('Permissions', route('admin.home'));
            });
    }
}