<? $system_settings = Kohana::$config->load("settings")->get("system"); ?>
<body class="hold-transition login-page">
<? if(isset($message) && $message): ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
			<div class="alert alert-warning alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-lg fa-warning"></i>&nbsp;Предупреждение!</h4>
				<?= $message; ?>
			</div>
		</div>
	</div>
</div>
<? endif; ?>
<div class="login-box">
	<div class="login-logo">
		<a href="/"><?= $system_settings["title_html"]; ?></a>
	</div>
	<div class="login-box-body">
		<p class="login-box-msg">Вход в систему</p>
		<form role="form" method="post" action="<?= $_pages[$_action]["url"]; ?>">
			<div class="form-group has-feedback">
				<input name="email" type="email" class="form-control" placeholder="Почта">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input name="password" type="password" class="form-control" placeholder="Пароль">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<input type="hidden" name="cfrc" value="<?= Security::token(); ?>"/>
					<button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
				</div>
			</div>
		</form>
		<br/>
		<a href="<?= $_pages["signin"]["url"]; ?>" class="text-center">Или зарегистрируйтесь.</a>
	</div>
</div>
<script>function autoexec(){history.pushState(null, null, "<?= $_pages[$_action]["url"]; ?>");}</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
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