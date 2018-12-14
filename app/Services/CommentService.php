<?php namespace App\Services;

use App\Comment;

class CommentService extends Service
{
    public function __construct(Comment $comment) {
        $this->model = $comment;
    }

    public function saveComment($data) {
        return $this->model->fill($data)->save();
    }
}