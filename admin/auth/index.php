<?php
use App\Modules\System\Classes\Application;
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
?>
<div class="container">
    <div class="page-block">
        <div class="page-title" style="text-align: center; display: block">Авторизация</div>

        <div class="display-grid grid-justify--around">
			<form method="post" class="form form--bordered">
				<div class="form-block">
					<label for="inputLogin">Логин</label>
					<input class="form-input" name="user-name" type="text" id="inputLogin" placeholder="Логин">
				</div>

				<div class="form-block">
					<label for="inputPassword">Пароль</label>
					<input class="form-input" name="user-pass" type="password" id="inputPassword" placeholder="Пароль">
				</div>

				<div class="display-grid grid-justify--around">
					<input class="form-input form-input--rounded form-send" type="submit" value="Войти">
				</div>
			</form>
		</div>
    </div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>