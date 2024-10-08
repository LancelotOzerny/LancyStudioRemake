<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>

<div class="container" style="min-height: 40vh">
	<div class="page-block">
		<div class="page-title">Ошибка 404</div>
		<div class="wrapper">
			<p>Уважаемый пользователь!</p>
			<p>Вы попали на страницу, которая не существует.</p>
			<p>Попробуйте перейти на другую страницу, к примеру из главного меню.</p>
		</div>
	</div>
</div>

<?php
\App\Modules\System\Classes\Template::Instance()->includeFooter();
?>
