<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/app/header.php';
use App\Modules\System\Classes\Template;
/** @var string $templatePath */

Template::Instance()->includeHeader();
?>

<div class="container">
    <div class="page-block">
        <div class="page-title" style="padding: 0">Дипломы и сертификаты</div>
    </div>
</div>

<div class="certificates-container">
	<div class="certificate-wrapper" style="background-color: #F7B35F;">
		<div class="container">
			<div class="certificate certificate-large--1440">
				<div class="certificate-side certificate-side--left">
					<div class="certificate-title page-title" style="color: #FF726B">Разработчик Bitrix Framework</div>
					<div class="certificate-description">
						<p class="certificate-param">“Интеграция дизайна и настройка платформы”</p>
						<p class="certificate-param"><span class="certificate-param-title">Дата выдачи:</span> 26.08.2023</p>
						<p class="certificate-param"><span class="certificate-param-title">Регистрационный номер:</span> CERT-EX-DEV-010-18327330-6925848-170239</p>
					</div>
				</div>
				<div class="certificate-side certificate-side--right">
					<img class="certificate-image" src="/files/images/certificates/1c-bitrix.png"/>
					<div class="button-wrapper">
						<a href="/files/pdf/certificates/certificate-ds4gd7s7a2.pdf" download class="download-button">Скачать (PDF)</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="certificate-wrapper" style="background-color: #EEEEEE;">
		<div class="container">
			<div class="certificate certificate-large--1000">
				<div class="certificate-side certificate-side--left">
					<div class="certificate-title page-title" style="color: #98C2FF">Диплом бакалавра</div>
					<div class="certificate-description">
						<p class="certificate-param">09.03.02 Информационные системы и технологии</p>
						<p class="certificate-param"><span class="certificate-param-title">Дата выдачи:</span> 05.05.2024</p>
						<p class="certificate-param"><span class="certificate-param-title">Профиль:</span> Разработка информационных систем</p>
					</div>
				</div>
				<div class="certificate-side certificate-side--right">
					<img class="certificate-image" src="/files/images/certificates/volsu.png"/>
					<!--
					<div class="button-wrapper">
						<a href="#" class="download-button disabled">Скачать (PDF)</a>
					</div>
					-->
				</div>
			</div>
		</div>
	</div>
</div>

<?php Template::Instance()->includeFooter(); ?>
