<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';

use App\Modules\System\Classes\Application;

/** @var string $templatePath */

if (Application::Instance()->request->post->has('userLogin'))
{
	$data = [];

	$name = Application::Instance()->request->post->get('userLogin');
	$pass = Application::Instance()->request->post->get('userPass');

	$name = trim(htmlspecialchars($name));
	$pass = trim(htmlspecialchars($pass));

	$hashPass = password_hash($pass, PASSWORD_DEFAULT);

	// Обработка данных

	die(json_encode($data));
}

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container">
    <div class="page-block">
        <div class="page-title" style="text-align: center; display: block">Авторизация</div>

        <div class="display-grid grid-justify--around">
			<form id="AuthForm" class="form form--bordered">
				<div class="form-block">
					<label for="inputLogin">Логин</label>
					<input class="form-input" name="user-name" type="text" id="inputLogin" placeholder="Логин">
				</div>

				<div class="form-block">
					<label for="inputPassword">Пароль</label>
					<input class="form-input" name="user-pass" type="password" id="inputPassword" value="test" placeholder="Пароль">
				</div>

				<div class="display-grid grid-justify--around">
					<input id="sendButton" class="form-input form-input--rounded form-send" type="submit" value="Войти">
				</div>
			</form>
		</div>
    </div>
</div>

<script>
	document.addEventListener('jqueryLoaded', () => {
		$('.form.ajax').ready(function()
        {
        	$('#AuthForm').submit(function(e) {
                e.preventDefault();

                let form = $(this);

                $.ajax({
					type: 'post',
					url: '<?= \App\Modules\System\Classes\Application::Instance()->getUri() ?>',
					data: {
                        userLogin: form.find('#inputLogin').val(),
                        userPass: form.find('#inputPassword').val(),
					},
					success: function(data)
					{
                        console.info(data)
					}
				});
			});
        });
	});
</script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>