<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';

/** @var string $templatePath */
?>

<!-- LABEL:HTML PAGE BANNER -->
<div class="main-preview-wrapper">
    <div class="container">
        <div class="page-block main-preview">
            <p class="main-preview-title">Максим Александрович Беляков</p>
            <img class="main-preview-logo" src="<?= $templatePath ?>/assets/sprites/logo-Icon.png" alt="Lancy Logo">
            <div class="page-title">WEB-программист, Unity разработчик</div>
        </div>
    </div>
</div>

<!-- LABEL:HTML ABOUT ME -->
<div class="container">
    <div class="page-block about-me">
        <div class="page-title">Обо мне в двух словах</div>
        <img class="about-me-picture" src="<?= $templatePath ?>/assets/sprites/goblin-art.png" alt="goblin picture">

        <div class="text-block">
            <p>
                Меня зовут Максим Александрович Беляков. Я программист из города Волгоград, в направлениях
                WEB-разработки и GameDev разработки, а также увлекаюсь дизайном, рисованием, просмотром сериалов,
                чтением книг, а также, в дальнейшем, хотел бы научиться петь, классно танцевать и без промаха
                стрелять из лука.
            </p>
            <p>
                Самое главное для меня - это непрерывное саморазвитие, непрерывное следование за мечтой и всегда
                иметь перед собой четко поставленную цель.
            </p>
        </div>
    </div>
</div>

<!-- LABEL:HTML INFO BLOCK-->
<div class="text-block text-block--lightblue text-block--shadow pv-50">
    <div class="container">
        <p>С детства я мечтал реализовать свою игру по типу готики, в которой некоторый “безымянный с косичкой”
           морра (который так и не отведал мухомора) спасает мир от спящего, затем от драконов, и другой
           напасти. В третьем классе я узнал что такое интернет, с пятого изучал разные игровые конструкторы,
           а в восьмом увидел, что мы не успели пройти одну тему по информатике, и поэтому прошел ее сам.
           Название темы - разработка сайтов на html и css. Так я и вошел в IT сферу.</p>
    </div>
</div>

<!-- LABEL:HTML BEST PROJECTS -->
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

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/footer.php';
?>