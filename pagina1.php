<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Starchool</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Starchool">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/courses.css">
	<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="top_bar_container">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
									<div class="top_bar_right ml-auto">



										<!-- Social -->
										<div class="top_bar_social">
											<span class="top_bar_title social_title">Siga-nos</span>
											<ul>
												<li><a href="https://www.instagram.com/starschoolcontato/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
											</li>
											<li class="nav-item d-none d-sm-inline-block">
												<a href="./dados.php" class="nav-link">Sair</a>
											</li>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Content -->
			<div class="header_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container mr-auto">
									<a href="#">
										<div class="logo_text">Starchool</div>
									</a>
								</div>
								<nav class="main_nav_contaner">
									<ul class="main_nav">
										<li><a href="index.php">Home</a></li>
										<li class="active"><a href="pagina1.php">Tipo</a></li>
										<li><a href="instrutores.php">Instrutores</a></li>
									</ul>
								</nav>
								<div class="header_content_right ml-auto text-right">
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- Menu -->

		<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
			<div class="menu_close_container">
				<div class="menu_close">
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="search">
				<form action="#" class="header_search_form menu_mm">
					<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
					<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
						<i class="fa fa-search menu_mm" aria-hidden="true"></i>
					</button>
				</form>
			</div>
			<nav class="menu_nav">
				<ul class="menu_mm">
					<li class="menu_mm"><a href="index2.html">Home</a></li>
					<li class="menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_mm"><a href="instructors.html">Instructors</a></li>
					<li class="menu_mm"><a href="#">Events</a></li>
					<li class="menu_mm"><a href="blog.html">Blog</a></li>
					<li class="menu_mm"><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
			<div class="menu_extra">
				<div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
				<div class="menu_social">
					<span class="menu_title">follow us</span>
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>



		<!-- Courses -->
		<br><br><br><br><br><br>

		<div class="courses">
			<div class="container">
				<div class="row courses_row">
					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/course_10.jpg" alt=""></div>
							<div class="course_body">
								<div class="course_title"><a href="course.html">Aluno</a></div>
								<div class="course_info">

								</div>
								<div class="course_text">
									<p>Acesso a materiais,ótimos professores e Orientadores Disponiveis para realização de aulas particulares online.</p>
								</div>
							</div>
							<div class="course_footer d-flex flex-row align-items-center justify-content-start">
								<div class="form_button trans_200"><a href="aluno/cadastroAluno.php">Cadastrar</a></div>
							</div>
						</div>
					</div>

					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/course_11.jpg" alt=""></div>
							<div class="course_body">
								<div class="course_title"><a href="course.html">Professor</a></div>
								<div class="course_info">
								</div>
								<div class="course_text">
									<p>Para você que já tem diploma e experiência em aulas pode negociar diretamente o valor com o aluno.</p>
								</div>
							</div>
							<div class="course_footer d-flex flex-row align-items-center justify-content-start">
								<div class="form_button trans_200"><a href="professor/cadastroProfessor.php">Cadastrar</a></div>
							</div>
						</div>
					</div>

					<!-- Course -->
					<div class="col-lg-4 course_col">
						<div class="course">
							<div class="course_image"><img src="images/course_12.jpg" alt=""></div>
							<div class="course_body">
								<div class="course_title"><a href="course.html">Orientador</a></div>
								<div class="course_info">
								</div>
								<div class="course_text">
									<p>Para você que tem facilidade em ensinar e quer ganhar uma grana extra, mas não possui diploma.</p>
								</div>
							</div>
							<div class="course_footer d-flex flex-row align-items-center justify-content-start">
								<div class="form_button trans_200"><a href="orientador/cadastroOrientador.php">Cadastrar</a></div>
							</div>
						</div>
					</div>

				</div>

				< </div> </div> </div> <script src="js/jquery-3.2.1.min.js">
					</script>
					<script src="styles/bootstrap4/popper.js"></script>
					<script src="styles/bootstrap4/bootstrap.min.js"></script>
					<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
					<script src="plugins/easing/easing.js"></script>
					<script src="js/courses.js"></script>
</body>

</html>