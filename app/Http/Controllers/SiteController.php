<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;

class SiteController extends Controller
{
    protected $theme;
    protected $template;

    private $vars = [];
    private $menuService;

    public function __construct(MenuService $menuService) {
        $this->theme = env('THEME');
        $this->menuService = $menuService;
    }

    protected function getRenderedTopMenu() {
        $menu = $this->menuService->getMenu();
        return view(env('THEME') . '.top-menu.menu')->with(['menu' => $menu])->render();
    }

    protected function addTemplateVariable(String $key, $value) {
        $this->vars = array_add($this->vars, $key, $value);
    }

    protected function render() {
        $topMenu = $this->getRenderedTopMenu();
        $this->addTemplateVariable('topMenu', $topMenu);

        return view($this->theme . '.' . $this->template)->with($this->vars);
    }
}
