<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container">
    <div class="page-block">
        <div class="page-title">Административная страница</div>
    </div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>