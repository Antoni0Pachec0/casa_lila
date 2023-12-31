<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila/html/css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<body>
    <!--Barra de navegacion superior-->
    <header class="header">
        <label for="btn_menu" class="menu"><i class='bx bx-menu' ></i></label>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>

        <div class="logo"></div>

        <!--Condiciones para abrir las variables get mediante la URL-->

        <?php if(isset($_GET["paginas"])): ?>

        <?php if($_GET["paginas"] == "login"): ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php else: ?>
            <a href="index.php?pagina=login">Inicia Sesion</a>
        <?php endif ?>

        <!------------------------------------------------------------>

        <?php if($_GET["paginas"] == "culturales"): ?>
            <a href="index.php?pagina=culturales">Cursos culturales</a>
        <?php else: ?>
            <a href="index.php?pagina=culturales">Cursos culturales</a>
        <?php endif ?>

        <!--=================================================================-->

        <?php if($_GET["paginas"] == "academicos"): ?>
                    <a href="index.php?pagina=academicos">Cursos academicos</a>
                <?php else: ?>
                    <a href="index.php?pagina=academicos">Cursos academicos</a>
                <?php endif ?>

        <!--=================================================================-->

        <?php if($_GET["paginas"] == "verano"): ?>
                    <a href="index.php?pagina=verano">Cursos de verano</a>
                <?php else: ?>
                    <a href="index.php?pagina=verano">Cursos de verano</a>
                <?php endif ?>

        <!--=================================================================-->


        <?php else: ?>

        <nav class="navbar">
            <a href="index.php?pagina=login">Inicia sesión</a>
        </nav>

        <div class="opciones-perfil">
            <label for="btn-perfil" class="perfil"><i class='bx bxs-user-circle' ></i></label>
            <input type="checkbox" id="btn-perfil">
            <div class="opciones">
                <nav>
                    <a href="">Perfil</a>
                    <a href="">Mis cursos</a>
                    <a href="">Cerrar sesión</a>
                </nav>
            </div>
        </div>
    </header>

    <?php endif ?>

    <input type="checkbox" id="btn_menu">
    <div class="container_menu">
        <div class="cont_menu">
            <nav>
                <a href="#">Opcion</a>
                <a href="#">Opcion</a>
                <a href="#">Opcion</a>
                <a href="#">Opcion</a>
                <a href="#">Opcion</a>
                <a href="#">Opcion</a>
            </nav>
            <label for="btn_menu" class="icon_equis"><i class='bx bx-x'></i></label>
        </div>
    </div>

<!--Abriremos esta seccion es para "seprar" la primera seccion la cual es la de informacio inicial-->
    <section class="inicio">
        <div class="fondo"></div>
        <div class="info_s">
            <h1>Bienvenido</h1>
            <p>¿Se ha sorprendido alguna vez por todo lo que puede conseguir tan solo teniendo al profesor adecuado? Enhorabuena, acaba de llegar al sitio donde nunca va a parar de crecer y aprender.</p>
        </div>
    </section>

<!--Este es el contenedor para mostrar todos los apartados de la pagina, la de curosos culturales academicos o culturales o de verano-->
    <main class="s-cursos">
        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="culturales">
            <!--La imagen promocional o demostrativa-->
            <img src="https://www.diariomotor.com/imagenes/2023/03/f40-liberty-walk-641212ae4033f.jpg" alt="">
            <!--El texto que va dentro del mismo-->
            <h2>Cursos culturales</h2>
            <p>¿Te interesa el arte? Encuentra actividades que ayuden a tu desarrollo artístico y diviertete aprendiendo.</p>
            <a href="">Saber más</a>
        </div>

        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="academicos">
            <!--La imagen promocional o demostrativa-->
            <img src="https://w0.peakpx.com/wallpaper/602/447/HD-wallpaper-ferrari-f40-back-view-aldix-racing-tuning-ferrari-f40-lm-supercars-white-f40-italian-cars-ferrari.jpg" alt="">
            <!--El texto que va dentro del mismo-->
            <h2>Cursos academicos</h2>
            <p>Dí adiós a las dificultades y el aburrimiento, estudiar no debe ser tedioso, sino entretenido.</p>
            <a href="">Saber más</a>
        </div>


        <!--Contenedor de una de los apartados-->
        <div class="cursos" id="verano">
            <img src="https://www.diariomotor.com/imagenes/2023/03/f40-liberty-walk-641212ae4033f.jpg" alt="">
            <h2>Cursos de verano</h2>
            <p>¿Demasiado tiempo libre en vacaciones? Aprovéchalo y aprende algo nuevo.</p>
            <a href="">Saber más</a>
        </div>

        <div class="slider-frame">
            <ul>
                <li><img src="https://images.pexels.com/photos/8134647/pexels-photo-8134647.jpeg" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8060364/pexels-photo-8060364.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8960865/pexels-photo-8960865.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
                <li><img src="https://images.pexels.com/photos/8960867/pexels-photo-8960867.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></li>
            </ul>
        </div>
    </main>

    <article class="info">
        <h2>Nuestra misión</h2>

<!--Este div es para contener todo el parrafo y poder posicionarlo-->
        <div>
            <p>Es fácil hacer un gran trabajo si realmente se cree en lo que se hace. Por este motivo trabajamos cada dia para llegar a más personas. Más que un grupo de expertos, somos una familia con una visión en común. Nuestra pasión y conocimientos nos ayudan a marcar la diferencia.</p>
        </div>

<!--Aqui va a ir la imagen promocional del lado dercho del section casi al mismo tamaño del mismo-->
        <img src="https://2game.com/wp/wp-content/uploads/2021/12/AC-Valhalla-Unlock-DLC-for-all-players.jpg" alt="">
    </article>

    <footer class="footer">
        <div class="contacto">
            <ul>
                <li><h2>Contacto</h2></li>
                <li>
                    <div class="c_electronico">
                        <label for="">Correo Electronico</label><br>
                        <a href="#">correoelectronico@gmail.com</a>
                    </div>
                </li>

                <li>
                    <div class="direccion">
                        <label for="">Direccion</label>
                        <p>Direccion de ejemplo</p>
                    </div>
                </li>

                <li>
                    <div class="sociales">
                        <a href=""><i class='bx bxl-facebook-circle'></i></a>
                        <a href=""><i class='bx bxl-instagram'></i></a>
                        <a href=""><i class='bx bxl-twitter' ></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </footer>

</body>
</html>