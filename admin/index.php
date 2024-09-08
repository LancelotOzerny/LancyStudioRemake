<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<div class="container" style="padding-left: 40px">
    <div class="page-block">
        <div class="page-title page-title--center page-title--padding-25">Административная страница</div>
    </div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>