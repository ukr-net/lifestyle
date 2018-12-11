<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use Illuminate\Support\Facades\View;

class PageController extends SiteController
{
    public function __construct(
        MenuService $menuService
    ) {
        parent::__construct($menuService);
        $this->template = 'page';
    }

    public function index($page) {
        if (View::exists(env('THEME') . '.pages.' . $page)) {
            $content = view(env('THEME') . '.pages.' . $page)->with([])->render();
            return $this->render($content);
        }

        abort(404); 
    }

    protected function render($content = '') {
        $this->addTemplateVariable('content', $content);

        return parent::render();
    }
}
