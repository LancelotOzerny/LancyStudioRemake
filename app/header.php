<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/modules/system/classes/autoload.php';

use App\Modules\System\Classes\Application;
use App\Modules\System\Classes\Template;

Application::Instance()->init();
Template::Instance()->includeHeader();