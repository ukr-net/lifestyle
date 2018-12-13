<?php namespace App\Services;

use App\Post;

class PostService extends Service
{
    public function __construct(Post $post) {
        $this->model = $post;
    }

    public function getPosts($filter) {
        $posts = $this->get([
            'with' => ['tags','user'], 
            'withCount' => ['comments'],
            'order' => ['id' => 'desc'],
            'date' => array_key_exists('date', $filter) ? $filter['date'] : false,
            'whereHas' => $filter,
            'paginate' => config('settings.blog_post_on_page')
        ]);
        
        return $this->updateImgPath($posts, config('settings.blog_img_dir'), 'thumb_img', config('settings.blog_img_thmbs_dir'));
    }

    public function getRecentPosts() {
        $posts = $this->get(['limit' => config('settings.recent_posts_count'), 'order' => ['id' => 'desc']]);
        return $this->updateImgPath($posts, config('settings.blog_img_dir'), 'thumb_img', config('settings.blog_img_thmbs_dir'));
    }

    public function getFilter($inputs) {
        $filter = [];

        if (isset($inputs['tag']))
            $filter['tags'] = ['alias', filter_var($inputs['tag'], FILTER_SANITIZE_STRING)];

        if (isset($inputs['author']))
            $filter['user'] = ['name', filter_var($inputs['author'], FILTER_SANITIZE_STRING)];
        
        if (isset($inputs['date'])) {
            if ($date = \DateTime::createFromFormat('Y-m-d', $inputs['date'])) {
                $filter['date'] = $date->format('Y-m-d');
            }
        }
            
        return $filter;
    }
}