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

    // ----------------------------------------------------------------------
    // ------------------- ШАБЛОН И ПРАВА ДОСТУПА ---------------------------
    // ----------------------------------------------------------------------
    $routeInfo = \Develop\Classes\Database\Tables\RoutesTable::select([
        'select' => [ 'route', 'template', 'rights_level'],
        'where' => [
            'route' => Application::Instance()->getUri()
        ]
    ])[0] ?? null;

    $templateName = 'default';
    if ($routeInfo)
    {
        $templateName = $routeInfo['template'];
        if ($currentUser->getRightsLevel() < $routeInfo['rights_level'])
        {
            header('Location:/admin/auth/');
        }
    }
    Template::Instance()->load($templateName);
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
