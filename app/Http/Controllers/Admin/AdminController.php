<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $theme;
    protected $template;
    protected $menuService;

    private $vars = [];
    
    public function __construct() {
        global $app;
        $this->theme = env('THEME') . '.admin';
        $this->menuService = $app->make('App\Services\MenuService');
    }

    protected function getRenderedTopMenu() {
        $menu = $this->menuService->getAdminMenu();
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
