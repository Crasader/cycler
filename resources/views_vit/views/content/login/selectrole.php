<? $system_settings = Kohana::$config->load("settings")->get("system"); ?>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="/"><?= $system_settings["title_html"]; ?></a>
	</div>
	<div class="login-box-body box-body box-profile">
		<h3 class="profile-username text-center">Здравствуйте, <?= $_user->name; ?></h3>
		<p class="text-muted text-center">Выберете роль для входа</p>
		<ul class="list-group list-group-unbordered">
			<? foreach ($_user->get_roles() as $role_name => $role): ?>
			<? if ($role_name != "login"): ?>
			<li class="list-group-item">
				<a href="/view/<?= $role_name; ?>/dashboard"><strong><?= $role->title; ?></strong> <span class="pull-right"><?= $role->description; ?></span></a>
			</li>
			<? endif; ?>
			<? endforeach; ?>
		</ul>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
</body>