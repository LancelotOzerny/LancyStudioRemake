<?php
error_reporting(E_ERROR);

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/modules/system/classes/autoload.php';

use App\Modules\System\Classes\Application;
use App\Modules\System\Classes\Template;

try
{
    session_start();
    Application::Instance()->init();

    // ----------------------------------------------------------------------
    // ------------------- ШАБЛОН И ПРАВА ДОСТУПА ---------------------------
    // ----------------------------------------------------------------------
    $routesList = \Develop\Classes\Database\Tables\RoutesTable::select([
        'select' => [ 'route', 'template', 'rights_level'],
        'order' => [
            'by' => 'sort',
            'direction' => 'desc',
        ]
    ]);

    $templateName = 'default';
    $rightsLevel = 0;
    $uri = Application::Instance()->getUri();
    foreach ($routesList as $route)
    {
        if ($uri === $route['route'] || str_starts_with($uri, $route['route']))
        {
            $templateName = $route['template'];
            $rightsLevel = $route['rights_level'];
            break;
        }
    }

    if (Application::Instance()->currentUser->getRightsLevel() < $rightsLevel)
    {
        header('Location:/admin/auth/');
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
