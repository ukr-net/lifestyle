<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\PostService;
use Illuminate\Support\Facades\View;

class PageController extends SiteController
{
    private $postService;

    public function __construct(
        MenuService $menuService,
        PostService $postService
    ) {
        parent::__construct($menuService);
        $this->postService = $postService;

        $this->template = 'page';
    }

    public function index($page) {
        if (View::exists(env('THEME') . '.pages.' . $page)) {
            $recentPosts = $this->postService->getRecentPosts();
            $sidebar = $this->getRenderedSidebar($recentPosts);
            $content = view(env('THEME') . '.pages.' . $page)->with(['sidebar' => $sidebar])->render();
            return $this->render($content);
        }

        abort(404); 
    }

    protected function render($content = '') {
        $this->addTemplateVariable('content', $content);

        return parent::render();
    }

    private function getRenderedSidebar($posts) {
        return view(env('THEME') . '.sidebars.page-sidebar')->with(['posts' => $posts])->render();
    }
}
