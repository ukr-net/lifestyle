<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    protected $theme;
    protected $template;

    private $vars = [];

    public function __construct() {
        $this->theme = env('THEME');
    }

    public function addTemplateVariable(String $key, $value) {
        $this->vars = array_add($this->vars, $key, $value);
    }

    public function render() {
        return view($this->theme . '.' . $this->template)->with($this->vars);
    }
}
