<!DOCTYPE HTML>
<html>
	<head>
	<title>Тренировка геймеров</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header" class="dark">
				<header>
					<h1>Желаете стать киберспортсменом?</h1>
					<p> Наша команда готова Вам помочь!<a href="http://html5up.net"></a></p>
					10 лет  на зарубежном рынке профессионально обучаем игроков от CS:GO до Team Fortress 2
				</header>
				<footer>
					<a href="#first" class="button scrolly">Узнать подробности</a>
				</footer>
			</section>

		<!-- First -->
			<section id="first" class="main">
				<header>
					<div class="container">
						<h2>Нужна персональная тренировка?</h2>
						<p>Работаем в офисах, расположенных в Москве, Санкт-Петербурге, Казани и Краснодаре<br />
						Если у Вас не будет прогресса- вернем деньги!</p>
					</div>
				</header>
				<div class="why">
					Люди выбирают нас, потому что:
				</div>
				<div class="content dark style1 featured">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-narrow">
								<section>
									<span class="feature-icon"><span class="icon fa-clock-o"></span></span>
									<header>
										<h3>Тщательно</h3>
									</header>
									<p>Подбираем тренировку для каждого</p>
								</section>
							</div>
							<div class="col-4 col-12-narrow">
								<section>
									<span class="feature-icon"><span class="icon fa-bolt"></span></span>
									<header>
										<h3>Стремительно</h3>
									</header>
									<p>Повышаем скилл игрока, поправляя ошибки</p>
								</section>
							</div>
							<div class="col-4 col-12-narrow">
								<section>
									<span class="feature-icon"><span class="icon fa-cloud"></span></span>
									<header>
										<h3>Качественно</h3>
									</header>
									<p>Прорабатываем все проблемы в тактике, механике и понимании игры</p>
								</section>
							</div>
							<div class="col-12">
								<footer>
									<a href="#second" class="button scrolly">Записаться на пробный урок</a>
								</footer>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Second -->
			<section id="second" class="main">
				<div class="content dark style2">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-narrow">
								<section>
									<h3>Список игр</h3>
									<p>по которым мы тренируем:</p>
									<footer>
										<a>Выбрать подходящую</a>
									</footer>
								</section>
							</div>
							<div class="col-8 col-12-narrow">
								<div class="row">
								<?php
									$con = mysqli_connect("localhost", "root", "", "DB");
									mysqli_set_charset($con, "utf8");

									if ($con == false) {
										echo ("Ошибка подключения: " . mysqli_connect_error());
									}
									else {
										$sql = "SELECT id, name, image, description, link FROM data";
										$result = mysqli_query($con, $sql);
										$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

										foreach ($rows as $row) {
											echo (
													"<div class='col-6'><a href='{$row['link']}' class='image fit'><h1>{$row['name']}</h1><img style='width:350px;height: 300px' src='{$row['image']}' alt='' /> <h1>{$row['description']}</h1></a></div>"
											);
										}
									}
								?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		<!-- Fourth -->
			<section id="fourth" class="main">
				<header class="eskere">
					<div class="container">
						<h2>Остались вопросы?</h2>
						<p>Напишите нам на почту protrenirovki@gtail.es<br /></p>
					</div>
				</header>
				

		<!-- Footer -->
			<section id="footer">
				<div class="copyright">
					<ul class="menu">
						<li>&copy; ООО "Гейминг Холдинг Групп" 2023</li><li>Все права защищены.</a></li>
					</ul>
				</div>
			</section>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>