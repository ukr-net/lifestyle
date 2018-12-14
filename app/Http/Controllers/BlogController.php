<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\PostService;
use App\Services\TagService;

class BlogController extends SiteController
{
    private $postService;
    private $tagService;

    public function __construct(
        MenuService $menuService,
        PostService $postService,
        TagService $tagService
    ) {
        parent::__construct($menuService);

        $this->postService = $postService;
        $this->tagService = $tagService;
    }

    public function list(Request $request) {
        $this->template = 'blog-list';

        $filter = $this->postService->getFilter($request->query());

        $tags = $this->tagService->getAll();
        $posts = $this->postService->getPosts($filter);
        $recentPosts = $this->postService->getRecentPosts();

        $sidebar = $this->getRenderedSidebar($recentPosts, $tags);
        
        $this->addTemplateVariable('sidebar', $sidebar);
        $this->addTemplateVariable('posts', $posts);

        return $this->render();
    }

    public function single($alias) {
        $this->template = 'blog-single';

        $post = $this->postService->getPost($alias);
        $recentPosts = $this->postService->getRecentPosts();
        $tags = $this->tagService->getAll();

        $sidebar = $this->getRenderedSidebar($recentPosts, $tags);

        $this->addTemplateVariable('sidebar', $sidebar);
        $this->addTemplateVariable('post', $post);

        return $this->render();
    }

    private function getRenderedSidebar($posts, $tags) {
        return view(env('THEME') . '.sidebars.blog-sidebar')
            ->with(['posts' => $posts, 'tags' => $tags])->render();
    }
}
