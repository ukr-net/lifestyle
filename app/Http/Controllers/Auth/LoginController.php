<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\SiteController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Services\MenuService;

class LoginController extends SiteController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(MenuService $menuService)
    {
        parent::__construct($menuService);
        
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $this->template = 'auth.login';
        return parent::render();
    }

    public function username()
    {
        return 'login';
    }
}
