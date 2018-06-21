@extends('layouts.main')

@section('content')
<body class="hold-transition login-page">
@if ($errors->has('message'))
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
            <div class="alert alert-warning alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-lg fa-warning"></i>&nbsp;Предупреждение!</h4>
                {{$errors->first('message')}}
            </div>
        </div>
    </div>
</div>
@endif
<div class="login-box">
    <div class="login-logo">
        <a href="{{ url()->current() }}">{{ __('Login') }}</a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Вход в систему</p>
        <form role="form" method="POST" aria-label="{{ __('Login') }} action="{{ route('login') }}">
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Пароль">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-12">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
                </div>
            </div>
        </form>
        <br/>
        <a href="{{ route('register') }}" class="text-center">Или зарегистрируйтесь.</a>
    </div>
</div>
<script>function autoexec(){history.pushState(null, null, "{{ url()->current() }}");}</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
!function ($) {
    "use strict";
    // if exist JQuery load and auto execution function
    if (!window.jQuery) throw new Error("JQuery is not loaded");
    $( document ).ready(function() {
        if (typeof autoexec !== "undefined" && typeof autoexec === "function") window.addEventListener("load", autoexec);
    });
}(window.jQuery);
</script>
</body>
@endsection
