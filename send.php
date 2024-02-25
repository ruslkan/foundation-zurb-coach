<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title></title>
	<meta name="keywords" content="">
	<meta name="description" content="" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
	<link rel="stylesheet" href="assets/css/app.css" />
</head>

<body>
	<div class="page">
		<!-- Start Top Bar -->
		<div class="page__top-bar">
			<div class="page__container">
				<!-- Start Top Bar -->
				<div class="top-bar">
					<div class="top-bar-left">
						<!-- Start Menu Main -->
						<nav class="nav">
							<ul class="menu nav__list" data-smooth-scroll>
								<li class="nav__item">
									<a href="#aboutMe" class="nav__link">Обо мне</a>
								</li>
								<li class="nav__item">
									<a href="#services" class="nav__link">Услуги</a>
								</li>
								<li class="nav__item">
									<a href="#contact" class="nav__link">Контакты</a>
								</li>
							</ul>
						</nav>
						<!-- End Menu Main -->
					</div>
					<div class="top-bar-center">
						<!-- Start Logo -->
						<div class="logo">
							<h3 class="logo__title">Екатерина Емельянчик</h3>
						</div>
						<!-- End Logo -->
					</div>
					<div class="top-bar-right">
						<!-- Start Social Icons -->
						<a target="_blank" class="social-icon__link" href="https://www.instagram.com/emelyanchik_coach?igsh&#x3D;YWwxb2FtNGhlMDV6&amp;utm_source&#x3D;qr">
							<svg class="social-icon__img">
								<use xlink:href="assets/img/icons-sprite.svg#insta"></use>
							</svg>
						</a>
						<!-- End Social Icons -->
						<!-- Start Social Icons -->
						<a target="_blank" class="social-icon__link" href="https://t.me/Katerin_coach">
							<svg class="social-icon__img">
								<use xlink:href="assets/img/icons-sprite.svg#telegramm"></use>
							</svg>
						</a>
						<!-- End Social Icons -->
						<!-- Start Social Icons -->
						<a target="_blank" class="social-icon__link" href="https://wa.me/375291546112">
							<svg class="social-icon__img">
								<use xlink:href="assets/img/icons-sprite.svg#watsapp"></use>
							</svg>
						</a>
						<!-- End Social Icons -->
					</div>
				</div>
				<!-- End Top Bar -->
			</div>
		</div>
		<!-- End Top Bar -->
		<main id="main" class="site-main">
			<?php
			/* checking the existence of variables */
			if (isset($_POST['phone'])) {
				$phone = $_POST['phone'];
			}
			if (isset($_POST['name'])) {
				$name = $_POST['name'];
			}
			if (isset($_POST['email'])) {
				$email = $_POST['email'];
			}
			
			/* recipient's email */
			$address = "admin@katerinaemelyanchik.by";
			
			/* message text, \n - line break */
			$mes = "Тема: Сообщение с сайта\nТелефон: $phone\nИмя: $name\nE-mail: $email\n";
			
			/* sending a letter to the specified e-mail */
			$sub = 'Сообщение с сайта';
			$email = '<katerinaemelyanchik.by>'; // from whom
			$send = mail($address, $sub, $mes, "Content-type:text/plain; charset = utf-8\r\nFrom:$email");
			
			ini_set('short_open_tag', 'On');
			header('Refresh: 3; URL=index.html');
			?>
			
			<!DOCTYPE html>
			<html class="no-js" lang="ru">
			<meta charset="utf-8" />
			<meta http-equiv="x-ua-compatible" content="ie=edge" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<title>С вами свяжутся</title>
			<link rel="stylesheet" href="assets/css/app.css" />
			
			<body>
			
				<div class="callout-wrap">
					<div class="callout">
						<h5>Ваше сообщение отправлено!</h5>
						<p>Я свяжусь с Вами в ближайшее время</p>
					</div>
				</div>
				<style type="text/css">
					body {
						background: #252b42;
					}
			
					.callout-wrap {
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						background-color: #ffffff;
					}
			
					.callout {
						text-align: center;
						padding: 20px;
						color: #2dc071;
						font-size: 22px;
					}
				</style>
				<script type="text/javascript">
					setTimeout('location.replace("/index.html")', 5000);
					/* change current page address after 5 seconds (5000 milliseconds) */
				</script>
			</body>
			
			</html>
			
		</main>
	</div>

	<script src="assets/js/app.js"></script>
</body>

</html>
