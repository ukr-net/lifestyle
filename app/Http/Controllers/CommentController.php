<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CommentService;
use Validator;

class CommentController extends SiteController
{
    private $commentService;

    public function __construct(CommentService $commentService) {
        $this->commentService = $commentService;
    }

    public function addComment(Request $request) {
        $data = $request->except('_token', 'alias');

        $validator = Validator::make($data, [
            'post_id' => 'integer|required',
            'name' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'text' => 'string|required'
        ]);

        if ($validator->fails()) {
             return redirect(route('blogSingle', ['alias' => $request->input('alias')]))
                        ->withErrors($validator)
                        ->withInput();
        }

        $this->commentService->saveComment($data);

        return redirect(route('blogSingle', ['alias' => $request->input('alias')]));
    }
}
