<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/modules/system/classes/autoload.php';

use App\Modules\System\Classes\Application;

Application::Instance()->init();

include_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';