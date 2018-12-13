<?php namespace App\Services;

use App\Tag;

class TagService extends Service
{
    public function __construct(Tag $tag) {
        $this->model = $tag;
    }
}