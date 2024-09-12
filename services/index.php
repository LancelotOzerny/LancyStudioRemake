<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
/** @var string $templatePath */

\App\Modules\System\Classes\Template::Instance()->includeHeader();
?>
<!-- LABEL:HTML FILTER PROJECTS -->
<div class="container">
    <div class="page-block">
        <div class="page-title">Все сервисы</div>

        <div class="portfolio">
            <a class="project" href="/services/color-pallete-generator/" draggable="false">
                <p class="project-title">Генератор Цветовой Палитры</p>
                <img src="/files/services/icons/colors.png" draggable="false" class="project-icon">
            </a>
        </div>
    </div>
</div>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>