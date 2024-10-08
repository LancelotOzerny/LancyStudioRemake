<?php
/** @var string $templatePath */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Портфолио WEB-разработчика</title>

	<link rel="stylesheet" href="<?= $this->templatePath ?>/assets/style.css">
</head>
<body>
<?php if(\App\Modules\System\Classes\Application::Instance()->currentUser->getRightsLevel() >= 100): ?>
<div class="side-navigation">
	<div class="side-navigation-content">
		<ul class="side-navigation-navbar">
			<span class="side-navigation-navbar-title">Настройки сайта</span>
			<li class="side-navigation-item"><a class="side-navigation-link" href="/admin/settings/routes/">Маршруты</a></li>
			<li class="side-navigation-item"><a class="side-navigation-link" href="/admin/settings/users/">Пользователи</a></li>
			<li class="side-navigation-item"><a class="side-navigation-link" href="/admin/settings/rights/">Права доступа</a></li>
		</ul>

		<ul class="side-navigation-navbar">
			<span class="side-navigation-navbar-title">Управление контентом</span>
			<li class="side-navigation-item"><a class="side-navigation-link" href="/admin/content/portfolio/">Портфолио</a></li>
		</ul>
	</div>
	<div class="side-navigation-toggle-area">
		<span class="side-navigation-toggler">&#9668;</span>
	</div>
</div>
<?php endif; ?>