@extends('layouts.login')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="{{route('login')}}">{{'settings_title'}}</a>
	</div>
	<div class="login-box-body box-body box-profile">
		<h3 class="profile-username text-center">Здравствуйте, {{$user->name}}</h3>
		<div class="callout callout-warning">
			<h4>Вам пока не назначена роль :(</h4>
			<p>Обратитесь к администратору или дождитесь когда вам назначут роль в системе.</p>
		</div>
		<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            
            {{ __('m.Logout') }}
        </a>

       	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
@endsection