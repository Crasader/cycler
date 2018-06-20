@extends('layouts.main')

@section('content')
<body class="hold-transition register-page">
@if (isset($message) && $message)
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
            @if (isset($message_type) && $message_type == 0)
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-lg fa-warning"></i>&nbsp;Предупреждение!</h4>
                    {{$message}}
                </div>
             @elseif (isset($message_type) && $message_type == 1)
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-lg fa-check"></i>&nbsp;Поздравляем!</h4>
                    {{$message}}
                </div>
            @else
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-lg fa-ban"></i>&nbsp;Ошибка!</h4>
                    {{$message}}
                </div>
            @endif
        </div>
    </div>
</div>
@endif
<div class="register-box">
    <div class="register-logo">
        <a href="{{url()->current()}}">{{ __('Register') }}</a>
    </div>
    <div class="register-box-body">
        <p class="login-box-msg">Регистрация пользователя</p>
        <form role="form" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @if (!$errors->has('name'))
            <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="{{ __('Name') }}" required value="{{ old('name') }}" autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            @else
            <div class="form-group has-feedback has-error">
                <input name="name" type="text" class="form-control" placeholder="{{ __('Name') }}" required value="{{ old('name') }}">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <small class="help-block">{{ $errors->first('name') }}</small>
            </div>
            @endif

            @if (!$errors->has('email'))
            <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" required value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            @else
            <div class="form-group has-feedback has-error">
                <input name="email" type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" required value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <small class="help-block">{{ $errors->first('email') }}</small>
            </div>
            @endif

            @if (!$errors->has('password') && !$errors->has('password_confirmation'))
            <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="{{ __('Password') }}" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            @else
            
                @if ($errors->has('password'))
                <div class="form-group has-feedback">
                    <input name="password" type="password" class="form-control" placeholder="{{ __('Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @else
                <div class="form-group has-feedback has-error">
                    <input name="password" type="password" class="form-control" placeholder="{{ __('Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <small class="help-block">{{ $errors->first('password') }}</small>
                </div>
                @endif

                @if ($errors->has('password_confirmation'))
                <div class="form-group has-feedback">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @else
                <div class="form-group has-feedback has-error">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <small class="help-block">{{ $errors->first('password_confirmation') }}</small>
                </div>
                @endif
            
            @endif

            <div class="row">
                <div class="col-xs-12">
                    @csrf
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Зарегистрироваться</button>
                </div>
            </div>
        </form>
        <br/>
        <a href="{{ route('login')}}" class="text-center">Или войдите, если уже зарегистрированы.</a>
    </div>
</div>
<script>function autoexec(){history.pushState(null, null, "{{ url()->current() }}");}</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
