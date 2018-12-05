<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends SiteController
{
    public function __construct() {
        parent::__construct();

        $this->template = 'index';
    }

    public function index() {
        return $this->render();
    }
}
