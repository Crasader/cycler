<? $system_settings = Kohana::$config->load("settings")->get("system"); ?>
<body class="hold-transition login-page">
<div class="login-box">
	<div class="login-logo">
		<a href="/"><?= $system_settings["title_html"]; ?></a>
	</div>
	<div class="login-box-body box-body box-profile">
		<h3 class="profile-username text-center">Здравствуйте, <?= $_user->name; ?></h3>
		<div class="callout callout-warning">
			<h4>Вам пока не назначена роль :(</h4>
			<p>Обратитесь к администратору или дождитесь когда вам назначут роль в системе.</p>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
</body>