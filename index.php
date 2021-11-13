<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://www.upslp.edu.mx/upslp/wp-content/themes/icemagtheme/images/demo/favico.ico" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://kit.fontawesome.com/8c04a359e6.js" crossorigin="anonymous"></script>
    <title>Eventos | UPSLP</title>
    <style>
        .headerLight {
            background-image: url(img/upslp.jpg);
            background-size: cover;
            background-position: center;
            min-height: 550px;
        }

        .headerDark {
            background-image: url(img/upslpDark.jpg);
            background-size: cover;
            background-position: center;
            min-height: 550px;
        }

        @media screen and (max-width: 670px) {
            header {
                min-height: 500px;
            }
        }

        .section {
            padding-top: 2vw;
            padding-bottom: 4vw;
        }

        .video-container {
            margin-bottom: 5%;
        }

        .secondary-content {
            color: #2196f3;
        }

        #nav-log {
            line-height: 65px;
        }

        #drop {
            background-color: transparent;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <header class="headerLight" id="header1">
        <div class="navbar-fixed">
            <nav class="nav-wrapper transparent" id="nav1">
                <div class="container">
                    <a href="#" class="brand-logo"><img class="responsive-img" src="img/logo.png" style="margin-top: 10%;" id="logonav"></a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#">Eventos en línea</a></li>
                        <li><a href="#">Eventos presenciales</a></li>
                        <li><a class='dropdown-trigger btn' href="#" data-target='dropdown1' id="drop"><i class="right material-icons">account_circle</i>
                                <?php
                                if (isset($_COOKIE['email']) && isset($_COOKIE['nombre'])) {
                                    echo strtok($_COOKIE['nombre'], " ");
                                }
                                ?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--sidenav-->
        <ul class="sidenav grey lighten-2" id="mobile-menu">
            <li><a href="#">Eventos en línea</a></li>
            <li><a href="#">Eventos presenciales</a></li>
            <li><a href="createEvent.php">Crear un evento</a></li>
            <li><a href="#">Buscar un evento</a></li>
            <?php
            if(isset($_COOKIE['email']) &&isset($_COOKIE['nombre'])){
                    $nombre = strtok($_COOKIE['nombre'], " ");
                    echo "<li><a href=\"logout.php\">Cerrar sesión de {$nombre}</a></li>";
                }else{
                    echo "<li><a href=\"login.html\">Iniciar sesión</a></li>";
                }
            ?>
        </ul>
        <!--dropdown-->
        <ul id='dropdown1' class='dropdown-content'>
            <?php
            if (isset($_COOKIE['email']) && isset($_COOKIE['nombre'])) {
                echo "<li><a href=\"logout.php\" class=\"blue-text text-darken-4\">Cerrar sesión</a></li>";
            } else {
                echo "<li><a href=\"login.html\" class=\"blue-text text-darken-4\">Iniciar sesión</a></li>";
            }
            ?>
            <li><a href="#" class="blue-text text-darken-4">Buscar evento</a></li>
            <li><a href="createEvent.php" class="blue-text text-darken-4">Crear evento</a></li>
        </ul>
        <section class="container section scrollspy">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card transparent hoverable">
                        <div class="card-content white-text center">
                            <span class="card-title center">
                                <h3>Eventos UPSLP</h3>
                            </span>
                            <p class="flow-text white-text">
                                Encuentra todos los eventos institucionales, congresos, conferencias y más organizados
                                dentro de las instalaciones
                                del campus de la Universidad Politécnica de San Luis Potosí. <br><br>
                            </p>
                            <h4>¡Encuentra tu próximo evento!</h4>
                            <a class="waves-effect waves-light btn-large orange darken-2" href="#"><i class="material-icons right">search</i>Buscar evento</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section class="container section scrollspy">
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>Descubre eventos en las instalaciones...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l3">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 1
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 2
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 3
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 4
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m6 l3 hide-on-small-and-down">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 5
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 hide-on-small-and-down">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 6
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 hide-on-small-and-down">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 7
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l3 hide-on-small-and-down">
                <div class="card blue">
                    <div class="card-content">
                        Lugar 8
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>Encuentra eventos por categoría...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Categoría 1
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Categoría 2
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Categoría 3
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="card horizontal hoverable">
                    <div class="card-image">
                        <img src="img/upslpDark.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <h4>Crea tu propio evento</h4>
                            <p class="flow-text">
                                Fija el lugar, fecha y hora de tu próximo evento en el campus de la UPSLP.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#" class="orange-text text-darken-2"><i class="material-icons left">add_circle</i>Crear evento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
                <h3>Eventos pasados...</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Evento pasado 1
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Evento pasado 2
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card blue">
                    <div class="card-content">
                        Evento pasado 3
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="page-footer orange darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h4 class="white-text">Contacto</h4>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/upslp/" target="_blank"><i class="fab fa-facebook"></i> Universidad Politécnica de San Luis
                                Potosí</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.instagram.com/upslp_oficial/" target="_blank"><i class="fab fa-instagram"></i> @upslp_oficial</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/c/UPSLPoficial2001" target="_blank"><i class="fab fa-youtube"></i> UPSLP</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://t.me/upslp_oficial" target="_blank"><i class="fab fa-telegram"></i> @UPSLP Oficial</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://api.whatsapp.com/send?phone=5214441887939&text=Hola%2C%20le%20estoy%20contactando%20desde%20la%20p%C3%A1gina%20UPSLP" target="_blank"><i class="fab fa-whatsapp"></i> +52 1 444 188 7939</a></li>
                        <li><a class="grey-text text-lighten-3" href="https://goo.gl/maps/ybYGfU1ePAaJC1Qu7" target="_blank"><i class="fas fa-map-marker-alt"></i> Urbano Villalón #500, Col. La Ladrillera, San Luis Potosí, S.L.P. México, C.P. 78363</a></li>
                    </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h4>Soporte</h4>
                    <ul>
                        <h6>
                            <li><a class="grey-text text-lighten-3" href="faq.html">Preguntas frecuentes</a></li>
                            <li><a class="grey-text text-lighten-3" href="help.html">Solucitud de ayuda</a></li>
                            <li><a class="grey-text text-lighten-3" href="loginAdmin.html">Sitio administrador</a></li>
                        </h6>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright orange darken-3">
            <div class="container center-align"><a class="white-text" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Universidad Politécnica de San Luis Potosí &copy; 2021</a></div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.sidenav').sidenav();
            $('.materialboxed').materialbox();
            $('.tabs').tabs();
            $('.tooltipped').tooltip();
            $('.scrollspy').scrollSpy();
            $(".dropdown-trigger").dropdown();

        });
        $(window).scroll(function() {
            if ($(window).scrollTop() >= 10) {
                $("#header1").removeClass('headerLight').addClass('headerDark');
                $("#nav1").removeClass('nav-wrapper transparent').addClass('nav-wrapper blue darken-4');
                $("#logonav").attr("src", "img/logo.png");
            } else {
                $("#header1").removeClass('headerDark').addClass('headerLight');
                $("#nav1").removeClass('nav-wrapper blue darken-4').addClass('nav-wrapper transparent');
                $("#logonav").attr("src", "img/logoog.png");
            }
        });
    </script>
    <script>

    </script>
</body>

</html>