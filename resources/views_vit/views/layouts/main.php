<? $system_settings = Kohana::$config->load("settings")->get("system"); ?>
<!DOCTYPE html>
<html lang="<?= $system_settings["locale"]; ?>">
<head>
	<meta charset="<?= $system_settings["charset"]; ?>">
	<meta name="robots" content="noindex">
	<meta name="author" content="laticq">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title><?= $_pages[$_action]["title"]; ?> - <?= $system_settings["title"]; ?></title>
	<link href="/favicon.png" rel="icon" type="image/png">
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="/public/css/font-awesome.min.css">
	<link rel="stylesheet" href="/public/css/AdminLTE.min.css">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic&amp;subset=cyrillic">
</head>
<?= $content; ?>
</html>