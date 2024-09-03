<!-- LABEL:HTML FOOTER -->
<div class="background--dark text--light">
	<div class="container">
		<div class="page-block main-footer">
			<div class="main-footer-contacts">
				<div class="page-title">Контакты</div>

				<ul class="h-navbar h-navbar--icons">
					<li class="h-navbar-item anim anim-hover--scale-80">
						<a class="h-navbar-link" href="https://t.me//lalalancy/">
							<img class="h-navbar-icon" src="assets/sprites/telegram-icon.png" alt="TG">
						</a>
					</li>

					<li class="h-navbar-item anim anim-hover--scale-80">
						<a class="h-navbar-link" href="https://vk.com/lancy_studio">
							<img class="h-navbar-icon" src="assets/sprites/vk-icon.png" alt="VK">
						</a>
					</li>

					<li class="h-navbar-item anim anim-hover--scale-80">
						<a class="h-navbar-link" href="https://github.com/LancelotOzerny">
							<img class="h-navbar-icon" src="assets/sprites/github-icon.png" alt="GITHUB">
						</a>
					</li>
				</ul>
			</div>

			<div class="main-footer-navigation">
				<div class="page-title">Навигация</div>

				<ul class="a-navbar">
					<li class="a-navbar-item">
						<a class="a-navbar-link" href="index.php">Главная</a>
					</li>
					<!--
                                        <li class="h-navbar-item anim anim-hover--text-blue-bordered">
                                            <a class="h-navbar-link" href="certificates.html">Сертификаты</a>
                                        </li>
                    -->
					<li class="a-navbar-item">
						<a class="a-navbar-link" href="portfolio.php">Портфолио</a>
					</li>
				</ul>
			</div>

			<div class="main-footer-services">
				<div class="page-title">Смотрите также</div>

				<ul class="a-navbar">
					<li class="a-navbar-item">
						<a class="a-navbar-link" href="#">Генерация цветов (скоро)</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<script src="assets/scripts/carousel.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(event) {
        'use strict';

        let htmlCarouselList = document.getElementsByClassName('carousel');
        for (let item of htmlCarouselList)
        {
            new Carousel(item);
        }
    })
</script>
</body>
</html>