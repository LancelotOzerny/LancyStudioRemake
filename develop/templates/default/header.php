<?php
/** @var string $templatePath */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Портфолио WEB-разработчика</title>

    <link rel="stylesheet" href="<?= $this->templatePath ?>/assets/style.css">
</head>
<body>
<!-- LABEL:HTML NAVIGATION -->
<div class="main-navigation-wrapper">
    <div class="container">
        <nav class="main-navigation">
            <img class="main-navigation-logo" src="<?= $this->templatePath ?>/assets/sprites/logo.png" alt="Lancy-Studio">

            <ul class="h-navbar h-navbar--links">
                <li class="h-navbar-item anim anim-hover--text-blue-bordered">
                    <a class="h-navbar-link" href="/">Главная</a>
                </li>

                <li class="h-navbar-item anim anim-hover--text-blue-bordered">
                    <a class="h-navbar-link" href="/portfolio/">Портфолио</a>
                </li>
            </ul>

            <hr class="main-navigation-separator">

            <ul class="h-navbar h-navbar--icons">
                <li class="h-navbar-item anim anim-hover--scale-80">
                    <a class="h-navbar-link" href="https://t.me//lalalancy/">
                        <img class="h-navbar-icon" src="<?= $this->templatePath ?>/assets/sprites/telegram-icon.png" alt="TG">
                    </a>
                </li>

                <li class="h-navbar-item anim anim-hover--scale-80">
                    <a class="h-navbar-link" href="https://vk.com/lancy_studio">
                        <img class="h-navbar-icon" src="<?= $this->templatePath ?>/assets/sprites/vk-icon.png" alt="VK">
                    </a>
                </li>

                <li class="h-navbar-item anim anim-hover--scale-80">
                    <a class="h-navbar-link" href="https://github.com/LancelotOzerny">
                        <img class="h-navbar-icon" src="<?= $this->templatePath ?>/assets/sprites/github-icon.png" alt="GITHUB">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>