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
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/contact.css">
    <link rel="stylesheet" type="text/css" href="../styles/contact_responsive.css">
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
                                    <a href="../index.php">
                                        <div class="logo_text">Starchool</div>
                                    </a>
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

        <!-- Home -->

        <div class="home">
            <div class="breadcrumbs_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <ul class="breadcrumbs_list d-flex flex-row align-items-center justify-content-start">
                                <li><a href="index2.html">home</a></li>
                                <li><a href="courses.html">courses</a></li>
                                <li><a href="courses.html">spanish</a></li>
                                <li>vocabulary</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class="intro">
            <div class="intro_background parallax-window" data-parallax="scroll" data-image-src="../images/intro.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="intro_container d-flex flex-column align-items-start justify-content-end">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course -->

    <div class="contact">

        <div class="container">
            <div class="row row-lg-eq-height">



                <!-- Form -->
                <form action="autenticacao.php" method="POST">
                    <div class="col-lg-6">
                        <span class="login100-form-title p-b-41">
                            <?php
                            if (isset($_SESSION['msg'])) {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </span>
                        <div class="form_title">Registrar</div>
                        <form action="#" id="contact_form" class="contact_form">
                            <div class="row contact_row">
                                <div class="col-lg-6 contact_col" data-validate="Enter username">>
                                    <input type="text" class="form_input" id="nome" name="nome" placeholder="Nome">
                                </div>
                                <ul class="lang_list">
                                    <select name="Materia" id="">
                                        <option value="Matematica"></option>
                                        <option value="Português"></option>
                                        <option value="Quimica"></option>
                                    </select>
                                    <div class="col-lg-6 contact_col" data-validate="Enter username">>
                                        <input type="text" class="form_input" id="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-lg-6 contact_col" data-validate="Enter username">>
                                        <input type="text" class="form_input" id="telefone" name="telefone" placeholder="Telefone">
                                    </div>
                                    <div class="col-lg-6 contact_col" data-validate="Enter username">>
                                        <input type="text" class="form_input" id="cpf" name="cpf" placeholder="CPF">
                                    </div>
                                    <div class="col-lg-6 contact_col" data-validate="Enter password">>
                                        <input type="password" class="form_input" id="senha" name="senha" placeholder="Senha">
                                    </div>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                    <div class="col">
                                        <input type=submit name="cadastrar" value="Cadastrar" class="form_button trans_200">
                                    </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


    </div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../styles/bootstrap4/popper.js"></script>
    <script src="../styles/bootstrap4/bootstrap.min.js"></script>
    <script src="../plugins/easing/easing.js"></script>
    <script src="../plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="../js/contact.js"></script>
</body>

</html>