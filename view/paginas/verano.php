<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/casa_lila/html/css/verano.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

    <!--Barra de navegacion-->
    <header class="header">
        <label for="btn_menu" class="menu"><i class='bx bx-menu' ></i></label>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Buscar...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>

        <div class="logo"></div>

        <?php if(isset($_GET["Paginas"])): ?>

        <!--Estos son los if de la parte de regitsro para que se "pinten"-->
        <!--Si la varieble GET es igual a registro, lo activo-->

        <!--El error que teniamos es que preguntabamos en cada if con el metodo isset-->

        <?php if($_GET["Paginas"] == "Inicio"): ?>
            <a href="Index.php?Pagina=Inicio">Inicio</a>
        <?php else: ?>
            <a href="Index.php?Pagina=Inicio">Inicio</a>
        <?php endif ?>

        <?php if($_GET["Paginas"] == "Login"): ?>
            <a href="Index.php?Pagina=Login">Inicia Sesion</a>
        <?php else: ?>
            <a href="Index.php?Pagina=Login">Inicia Sesion</a>
        <?php endif ?>


        <?php else: ?>

        <nav class="navbar">
            <a href="Index.php?pagina=Inicio">Inicio</a>
            <a href="Index.php?Pagina=Login">Inicia sesion</a>
        </nav>

        <a href="" class="perfil"><i class='bx bxs-user-circle' ></i></a>
    </header>

    <?php endif ?>

    <!--Menu lateral-->
    <input type="checkbox" id="btn_menu">
    <div class="container_menu">
        <div class="cont_menu">
            <nav>
                <a href="#">Opcion 1</a>
                <a href="#">Opcion 2</a>
                <a href="#">Opcion 3</a>
                <a href="#">Opcion 4</a>
                <a href="#">Opcion 5</a>
                <a href="#">Opcion 6</a>
            </nav>
            <label for="btn_menu" class="icon_equis"><i class='bx bx-x'></i></label>
        </div>
    </div>

    <!--Central-->
    <main>
        <section class="izquierdo">
            <h1 class="titulo">Cursos de verano</h1>

            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/133/969/139/artwork-nature-landscape-fantasy-art-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/30/586/460/artwork-fantasy-art-digital-art-forest-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/990/547/605/digital-art-futuristic-city-car-artwork-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/760/955/638/artwork-landscape-sky-mountains-wallpaper-preview.jpg">
                    </div>
                    <div class="item">
                        <img src="https://c4.wallpaperflare.com/wallpaper/626/913/146/cyberpunk-skyscraper-upside-down-animated-movies-wallpaper-preview.jpg">
                    </div>
                </div>
        
                <!--Botones prev y next-->
        
                <div class="buttons">
                    <button id="prev"><</button>
                    <button id="next">></button>
                </div>
        
                <!--Dots o puntos... (if 5 items => 5 dots)-->
        
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <div class="info">
                <h3>Informacion del curso</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum labore numquam excepturi repellendus voluptatem veniam corporis illum rerum autem perferendis blanditiis sed vitae est quibusdam eum possimus asperiores, cupiditate sapiente.</p>
            </div>
        </section>

        <section class="derecho">
            <div class="superior">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo facere repellat fugit nam distinctio sint veritatis error nulla. Adipisci quae saepe aut dignissimos! Quis, delectus reiciendis facere alias soluta eos.</p>
                <img src="" alt="">
            </div>
            <div class="inferior">
                <img src="https://e1.pxfuel.com/desktop-wallpaper/873/51/desktop-wallpaper-nissan-s15-silvia-fast-and-furious-nissan-silvia.jpg" alt="">
            </div>
        </section>
    </main>

    <!--Footer-->

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

    <script src="http://localhost/casa_lila/html/js/slider.js"></script>
</body>
</html>