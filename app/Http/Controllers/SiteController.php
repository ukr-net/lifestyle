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
        $this->init();
    }

    private function init() {
        $this->crateTopMenu();
    }

    private function crateTopMenu() {
        $menu = $this->menuService->getMenu();
        //dd($menu);
        $topMenu = view(env('THEME') . '.top-menu')->with(['menu' => $menu])->render();
        $this->addTemplateVariable('topMenu', $topMenu);
    }

    protected function addTemplateVariable(String $key, $value) {
        $this->vars = array_add($this->vars, $key, $value);
    }

    protected function render() {
        return view($this->theme . '.' . $this->template)->with($this->vars);
    }
}
