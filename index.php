<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Starchool</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Lingua project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
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

                                        <!-- Language -->
                                        <div class="top_bar_lang">
                                            <span class="top_bar_title">site language:</span>
                                            <ul class="lang_list">
                                                <li class="hassubs">
                                                    <a href="#">Matemática<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                    <ul>
                                                        <li><a href="#">Português</a></li>
                                                        <li><a href="#">Química</a></li>
                                                        <li><a href="#">Física</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Social -->
                                        <div class="top_bar_social">
                                            <span class="top_bar_title social_title">Siga-nos</span>
                                            <ul>
                                                <li><a href="https://www.instagram.com/starschoolcontato/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            </ul>
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
                                    <a href="index.php">
                                        <div class="logo_text">Starchool</div>
                                    </a>
                                </div>
                                <div class="header_content_right ml-auto text-right">
                                    <div class="header_search">
                                        <div class="search_form_container">
                                            <form action="#" id="search_form" class="search_form trans_400">
                                                <input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
                                                <div class="search_button">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <!-- Hamburger -->

                                    <div class="user"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
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
                    <li class="menu_mm"><a href="index.php">Home</a></li>
                    <li class="menu_mm"><a href="cursos.php">Matérias</a></li>
                    <li class="menu_mm"><a href="orientadores.php">Orientadores</a></li>
                    <li class="menu_mm"><a href="professores.php">Professores</a></li>
                    <li class="menu_mm"><a href="contato.php">Contato</a></li>
                </ul>
            </nav>
            <div class="menu_extra">
                <div class="menu_phone"><span class="menu_title">phone:</span>+44 300 303 0266</div>
                <div class="menu_social">
                    <span class="menu_title">S</span>
                    <ul>
                        <li><a href="https://www.instagram.com/starschoolcontato/?hl=pt-br"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="home_background" style="background-image: url(images/index_background.jpg);"></div>
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1 class="home_title">Starchool</h1>
                            <div class="home_button trans_200"><a href="dados.php">Entrar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Language -->

        <div class="language">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="language_slider_container">

                            <!-- Language Slider -->

                            <div class="owl-carousel owl-theme language_slider">

                                <!-- Flag -->
                                <div class="owl-item language_item">
                                    <a href="#">
                                        <div class="flag"><img src="images/Ukrainian.svg" alt=""></div>
                                        <div class="lang_name">Matemática</div>
                                    </a>
                                </div>

                                <!-- Flag -->
                                <div class="owl-item language_item">
                                    <a href="#">
                                        <div class="flag"><img src="images/Japanese.svg" alt=""></div>
                                        <div class="lang_name">Português</div>
                                    </a>
                                </div>

                                <!-- Flag -->
                                <div class="owl-item language_item">
                                    <a href="#">
                                        <div class="flag"><img src="images/Lithuanian.svg" alt=""></div>
                                        <div class="lang_name">Química</div>
                                    </a>
                                </div>

                                <!-- Flag -->
                                <div class="owl-item language_item">
                                    <a href="#">
                                        <div class="flag"><img src="images/Swedish.svg" alt=""></div>
                                        <div class="lang_name">Física</div>
                                    </a>
                                </div>

                            </div>

                            <div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                            <div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Courses -->

        <div class="courses">
            <div class="courses_background"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section_title text-center">Matérias</h2>
                    </div>
                </div>
                <div class="row courses_row">

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_1.jpg" alt=""></div>
                            <div class="course_body">
                                <div class="course_title"><a href="course.html">Matemática</a></div>
                                <div class="course_info">
                                    <ul>
                                        <li><a href="instructors.html">Sarah Parker</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="course_text">
                                    <p>Entrar.Gerson</p>
                                </div>
                            </div>
                            <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                                <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                                <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                                <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_2.jpg" alt=""></div>
                            <div class="course_body">
                                <div class="course_title"><a href="course.html">Português</a></div>
                                <div class="course_info">
                                    <ul>
                                        <li><a href="instructors.html">Sarah Parker</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div>
                                <div class="course_text">
                                    <p>Entrar</p>
                                </div>
                            </div>
                            <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                                <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                                <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                                <div class="course_mark course_free trans_200"><a href="#">Free</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Course -->
                    <div class="col-lg-4 course_col">
                        <div class="course">
                            <div class="course_image"><img src="images/course_3.jpg" alt=""></div>
                            <div class="course_body">
                                <div class="course_title"><a href="course.html">Química</a></div>
                                <div class="course_info">
                                    <ul>
                                        <li><a href="instructors.html">Sarah Parker</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                                <div class="course_text">
                                    <p>Entrar</p>
                                </div>
                            </div>
                            <div class="course_footer d-flex flex-row align-items-center justify-content-start">
                                <div class="course_students"><i class="fa fa-user" aria-hidden="true"></i><span>10</span></div>
                                <div class="course_rating ml-auto"><i class="fa fa-star" aria-hidden="true"></i><span>4,5</span></div>
                                <div class="course_mark trans_200"><a href="#">$45</a></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Instructors -->

        <div class="instructors">
            <div class="instructors_background" style="background-image:url(images/instructors_background.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="section_title text-center">Os melhores</h2>
                    </div>
                </div>
                <div class="row instructors_row">

                    <!-- Instructor -->
                    <div class="col-lg-4 instructor_col">
                        <div class="instructor text-center">
                            <div class="instructor_image_container">
                                <div class="instructor_image"><img src="images/instructor_1.jpg" alt=""></div>
                            </div>
                            <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="instructor_title">Teacher</div>
                            <div class="instructor_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                            </div>
                            <div class="instructor_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Instructor -->
                    <div class="col-lg-4 instructor_col">
                        <div class="instructor text-center">
                            <div class="instructor_image_container">
                                <div class="instructor_image"><img src="images/instructor_2.jpg" alt=""></div>
                            </div>
                            <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="instructor_title">Teacher</div>
                            <div class="instructor_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                            </div>
                            <div class="instructor_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Instructor -->
                    <div class="col-lg-4 instructor_col">
                        <div class="instructor text-center">
                            <div class="instructor_image_container">
                                <div class="instructor_image"><img src="images/instructor_3.jpg" alt=""></div>
                            </div>
                            <div class="instructor_name"><a href="instructors.html">Sarah Parker</a></div>
                            <div class="instructor_title">Teacher</div>
                            <div class="instructor_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
                            </div>
                            <div class="instructor_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="styles/bootstrap4/popper.js"></script>
        <script src="styles/bootstrap4/bootstrap.min.js"></script>
        <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="plugins/easing/easing.js"></script>
        <script src="js/custom.js"></script>
</body>

</html>
<?php
