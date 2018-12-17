@extends('lifestyle.layouts.site')

@section('content')
<div class="container background-white">
    <div class="container">
        <div class="row margin-vert-30">
            <!-- Login Box -->
            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                <form class="login-page" method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="login-header margin-bottom-30">
                        <h2>Login to your account</h2>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input 
                        placeholder="User Login" 
                        class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" 
                        type="text"
                        name="login" value="{{ old('login') }}" required autofocus>
                    </div>
                    <div class="input-group margin-bottom-20">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input 
                        placeholder="Password" 
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        type="password"
                        name="password" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="checkbox">
                                <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="remember" 
                                id="remember" {{old('remember') ? 'checked' : ''}}>
                                Stay signed in
                            </label>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>
                    <hr>
                    @if (Route::has('password.request'))
                        <h4>Forget your Password ?</h4>
                        <p>
                            <a href="{{ route('password.request') }}">Click here</a> to reset your password.
                        </p>
                    @endif
                </form>
            </div>
            <!-- End Login Box -->
        </div>
    </div>
</div>
@endsection