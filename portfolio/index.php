<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';

/** @var string $templatePath */
?>

<!-- LABEL:HTML BEST PROJECTS -->
<div class="background--gold">
    <div class="page-block">
        <div class="container">
            <div class="page-title">Лучшие проекты</div>
        </div>

        <div class="carousel">
            <img class="carousel-left-arrow" src="<?= $templatePath ?>/assets/sprites/arrow.png" alt="left">
            <img class="carousel-right-arrow" src="<?= $templatePath ?>/assets/sprites/arrow.png" alt="left">
            <div class="carousel-content">
                <div class="carousel-items-wrapper">
                    <a class="project" href="https://github.com/LancelotOzerny/LancyStudio.git" draggable="false">
                        <p class="project-title">WEB: Lancy Studio Old</p>
                        <img src="<?= $templatePath ?>/assets/sprites/projects/logo-Icon.png" draggable="false" alt="Project Icon" class="project-icon">
                    </a>

                    <a class="project" href="https://github.com/LancelotOzerny/LimitedFigure.git" draggable="false">
                        <p class="project-title">Unity: Pixel Limited Figure</p>
                        <img src="<?= $templatePath ?>/assets/sprites/projects/limited-figure-old.png" draggable="false" alt="Project Icon" class="project-icon">
                    </a>

                    <a class="project" href="https://github.com/LancelotOzerny/New-Game-Developer-Toolkit.git" draggable="false">
                        <p class="project-title">Unity: Unity Developer Toolkit</p>
                        <img src="<?= $templatePath ?>/assets/sprites/projects/udt.png" draggable="false" alt="Project Icon" class="project-icon">
                    </a>

                    <a class="project" href="#project" draggable="false">
                        <p class="project-title">Unity: Limited Figure</p>
                        <img src="<?= $templatePath ?>/assets/sprites/projects/limited-figure.png" draggable="false" alt="Project Icon" class="project-icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- LABEL:HTML FILTER PROJECTS -->
<div class="container">
    <div class="page-block">
        <div class="page-title">Все проекты</div>

        <div class="portfolio">
            <a class="project" href="https://github.com/LancelotOzerny/LancyStudio.git" draggable="false">
                <p class="project-title">WEB: Lancy Studio Old</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/logo-Icon.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="https://github.com/LancelotOzerny/LimitedFigure.git" draggable="false">
                <p class="project-title">Unity: Pixel Limited Figure</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/limited-figure-old.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="https://github.com/LancelotOzerny/AJAX_CRUD_REVIEWS.git" draggable="false">
                <p class="project-title">WEB: Ajax Crud Отзывов</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/reviews.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="https://github.com/LancelotOzerny/PHP_User-Crud.git" draggable="false">
                <p class="project-title">WEB: PHP Crud пользователей</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/users.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="https://github.com/LancelotOzerny/Fullstack_Exercise.git" draggable="false">
                <p class="project-title">WEB: Задание FullStack CodeIgniter</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/codeigniter.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="https://github.com/LancelotOzerny/New-Game-Developer-Toolkit.git" draggable="false">
                <p class="project-title">Unity: Unity Developer Toolkit</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/udt.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>

            <a class="project" href="#project" draggable="false">
                <p class="project-title">Unity: Limited Figure</p>
                <img src="<?= $templatePath ?>/assets/sprites/projects/limited-figure.png" draggable="false" alt="Project Icon" class="project-icon">
            </a>
        </div>
    </div>
</div>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>