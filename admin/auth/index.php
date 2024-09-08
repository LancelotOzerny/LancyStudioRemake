<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';

use App\Modules\System\Classes\Application;
use Develop\Classes\Database\Tables\UsersTable;

/** @var string $templatePath */

if (isset($_SESSION['login-user']))
{
    header('Location:/admin/');
}

if (Application::Instance()->request->post->has('userLogin'))
{
    $resultData = [];
    $resultData['errors'] = [];
    $resultData['success'] = [];

    $currentUserLogin = Application::Instance()->request->post->get('userLogin');
    $currentUserPassword = Application::Instance()->request->post->get('userPass');

    $currentUserLogin = trim(htmlspecialchars($currentUserLogin));
    $currentUserPassword = trim(htmlspecialchars($currentUserPassword));

	$selectedUserList = UsersTable::select([
		'select' => ['id', 'login', 'password'],
		'where' => [
			'login' => $currentUserLogin,
		]
	]);

	if (empty($selectedUserList))
    {
        $resultData['errors'][] = 'Пользователь не найден!';
	}
	else
    {
        $currentPassVerify = password_verify($currentUserPassword, $selectedUserList[0]['password']);
		if ($currentPassVerify === false)
        {
            $resultData['errors'][] = 'Неверный пароль!';
		}
	}

	if (empty($resultData['errors']))
    {
		$_SESSION['login-user'] = $currentUserLogin;
        $resultData['success'][] = 'Авторизация прошла успешно!';
	}

	die(json_encode($resultData));
}

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container display-grid align-content--center">
	<div class="page-title" style="text-align: center; display: block">Авторизация</div>
	<form id="AuthForm" class="form form--bordered">
		<div class="form-block">
			<label for="inputLogin">Логин</label>
			<input class="form-input" name="user-name" type="text" id="inputLogin" placeholder="Логин">
		</div>

		<div class="form-block">
			<label for="inputPassword">Пароль</label>
			<input class="form-input" name="user-pass" type="password" id="inputPassword" value="test" placeholder="Пароль">
		</div>

		<small class="error-messages" style="margin-top: 10px; font-weight: 700; color: #c42626; font-size: 13px"></small>

		<div class="display-grid">
			<input id="sendButton" class="form-input form-input--rounded form-send" type="submit" value="Войти">
		</div>
	</form>
</div>

<script>
	document.addEventListener('jqueryLoaded', () => {
		$('.form.ajax').ready(function()
        {
        	$('#AuthForm').submit(function(e) {
                e.preventDefault();

                let form = $(this);
                let errorMessagesBox = form.find('.error-messages');

                $.ajax({
					type: 'post',
					url: '<?= \App\Modules\System\Classes\Application::Instance()->getUri() ?>',
					data: {
                        userLogin: form.find('#inputLogin').val(),
                        userPass: form.find('#inputPassword').val(),
					},
					success: function(data)
					{
                        let resultData = JSON.parse(data);

                        errorMessagesBox.html('');
                        if (resultData.errors.length > 0)
                        {
                            for (let i = 0; i < resultData.errors.length; ++i)
                            {
                                errorMessagesBox.append($('<p>', {text: resultData.errors[i]}));
							}
						}
                        else
                        {
                            window.location.replace('/admin/');
						}
					}
				});
			});
        });
	});
</script>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>