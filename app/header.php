<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/modules/system/classes/autoload.php';

use App\Modules\System\Classes\Application;
use App\Modules\System\Classes\Template;

try
{
    session_start();
    Application::Instance()->init();
    $currentUser = new \App\Modules\System\Classes\User();

    if (Application::Instance()->request->session->has('login-user'))
    {
        $currentUser->loadByLogin(Application::Instance()->request->session->get('login-user'));
    }

    Template::Instance()->load(Application::Instance()->getUri());
    $templatePath = Template::Instance()->templatePath;
}
catch (Throwable $error)
{
    echo '<pre>';
    print_r([
        'file' => $error->getFile(),
        'line' => $error->getLine(),
        'message' => $error->getMessage(),
    ]);
    echo '</pre>';
}
