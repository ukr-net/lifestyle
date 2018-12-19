<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Gate;

class IndexController extends AdminController
{
    public function __construct() {
        parent::__construct();

        $this->template = 'index';
    }

    public function index() {
        
        if (Gate::denies('VIEW_ADMIN')) {
            abort(403);
        }
        return $this->render();
    }
}
