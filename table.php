<!DOCTYPE HTML>
<html>
	<head>
		<title>Моніторинг атмосферного повітря м.Вінниці</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
		<link rel="manifest" href="images/favicon/site.webmanifest">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1>Таблиця даних</h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.html">Головна</a></li>
								<li>
									<a href="#">Моніторинг</a>
									<ul>
										<li><a href="table.php">Таблиця даних</a></li>
										<li>
											<a href="matrix.html">Матриці (до та після ремонту) &hellip;</a>
											<ul>
												<li><a href="matrix.html#m1">Ангідрид сірчистий</a></li>
												<li><a href="matrix.html#m2">Азоту діоксид</a></li>
												<li><a href="matrix.html#m3">Вуглецю оксид</a></li>
												<li><a href="matrix.html#m4">Пил</a></li>
											</ul>
										</li>
										<li>
											<a href="rmatrix.html">Матриці різниці&hellip;</a>
											<ul>
												<li><a href="rmatrix.html#m1">Ангідрид сірчистий</a></li>
												<li><a href="rmatrix.html#m2">Азоту діоксид</a></li>
												<li><a href="rmatrix.html#m3">Вуглецю оксид</a></li>
												<li><a href="rmatrix.html#m4">Пил</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="profile.html">Профілі</a></li>
								<li><a href="map.html">Точки спостережень</a></li>
							</ul>
						</nav>
				</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<p>
								<table align="center" class="tableSS">
									<th align="center" class="tableTH" bgcolor="#b0e0e6"><h3>Дата</h3></th>
									<th align="center" class="tableTH" bgcolor="#b0e0e6"><h3>Де проводили</h3></th>
									<th align="center" class="tableTH" bgcolor="#b0e0e6"><h3>Показник</h3></th>
									<th align="center" class="tableTH" bgcolor="#b0e0e6"><h3>Значення</h3></th>
									<?php
									define("DB_SERVER", "localhost");
									define("DB_USER", "root");
									define("DB_PASSWORD", "");
									define("DB_DATABASE", "monvinua");
									$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
									$query = "SELECT * FROM dani INNER JOIN pokaznuk ON dani.id_pokaznuka = pokaznuk.id_pokaznuka INNER JOIN tochka_sposteregennya ON dani.id_tochku = tochka_sposteregennya.id_tochku_sposteregennya";

									$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect));

									while ($rezult = mysqli_fetch_array($result)) {
									echo "<tr>
									<td align='center' class='tableTH'>{$rezult['data']}</td>
									<td align='center' class='tableTH'>{$rezult['nazva_tochku']}</td>
									<td align='center' class='tableTH'>{$rezult['nazva_pokaznuka']}</td>
									<td align='center' class='tableTH'>{$rezult['znachennya']}</td></tr>";
									}
									?>
								</table>
							</p>
						</article>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>У вас виникли запитання?</h3>
										</header>
										<p>Ви можете зв'язатись зі мною за допомогою:</p>
										<ul class="icons">
											<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100007381413044" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a target="_blank" href="https://instagram.com/axedez69" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<script type="text/javascript">
			 $(document).ready(function(){ 
			 
				 $(window).scroll(function(){
				 	if ($(this).scrollTop() > 100) {
				 		$('.scrollup').fadeIn();
							 } else {
				 		$('.scrollup').fadeOut();
				 			}
				 		}); 
				 
				 $('.scrollup').click(function(){
				 	$("html, body").animate({ scrollTop: 0 }, 600);
				 	return false;
	 			});
 			});
			</script>
		<a href="#" class="scrollup">Наверх</a>

	</body>
</html>