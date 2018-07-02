@extends('layouts.main')

@section('content')
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="/">{{ 'Settings title' }}</a>
	</div>
	<div class="login-box-body box-body box-profile">
		<h3 class="profile-username text-center">Здравствуйте, <?= $_user->name; ?></h3>
		<p class="text-muted text-center">Выберете роль для входа</p>
		<ul class="list-group list-group-unbordered">
			@foreach ($_user->roles()->get() as $role)
			<li class="list-group-item">
				<a href="{{route($role->name)}}"><strong>{{$role->name}}</strong> <span class="pull-right">{{$role->display_name}}</span></a>
			</li>
			@endforeach
		</ul>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
@endsection