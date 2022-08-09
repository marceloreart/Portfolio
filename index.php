<?php include 'conexion.php'; ?>
<?php $conexion = new conexion();
/*$sql = "SELECT * FROM `proyectos`";
 $datos = $conexion->consultar($sql);*/
$proyectos = $conexion->consultar("SELECT * FROM `proyectos`"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marcelo Rearte | PHP Developer & UX/UI Designer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/1511a24fe7.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid .mx-0">
        <!--NAVBAR-->
        <div class="row .mx-0">
            <nav class="navbar navbar-expand-lg  barra">
                <div class="container-fluid .mx-0">
                    <div class="nav_img">
                        <a class="nav-link" href="#">
                            <!--<img src="/assets/image/Logo Marca Personal Masculino con Iniciales y Nombre Profesional Blanco y Negro.png" alt="" width="30" height="24" class="d-inline-block align-text-top">-->Marcelo Rearte | PHP Developer & UX/UI Designer
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse nav_items" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link " aria-current="page" href="#sobreMi">Sobre Mí</a>
                            <a class="nav-link" href="#proyectos">Mis Proyectos</a>
                            <a class="nav-link" href="#Contacto">Contacto</a>

                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link" href="https://github.com/marceloreart" target="_blank"> <img src="/assets/image/github.png" alt="github logo"></a>
                            <a class="nav-link" href="https://www.linkedin.com/in/marcelo-rearte-becerra-8a4043198/" target="_blank"><img src="/assets/image/linkedin.png" alt="linkedin logo"></a>
                            <a class="nav-link" href="https://www.behance.net/marcelorearte" target="_blank"> <img src="/assets/image/behance.png" alt="behance logo"></a>
                            <a class="nav-link" href="/english.html">English</a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
        <!--FIN NAVBAR-->
        <!--HERO IMAGE-->
        <div class="container-fluid hero" style="padding-left: 0 !important;
        padding-right:0 !important;">
            <div class="row">
                <div class="col-12 ">
                    <div id="particles-js" class="hero position-relative">
                        <div class="hero-title position-absolute top-50 start-50 translate-middle">
                            <img src="/assets/image/WhatsApp Image 2022-08-08 at 9.20.06 PM.jpeg" alt="" id="image-hero">
                            <h1 class="hero-title">Hola, soy Chelo</h1>
                            <h4 class="hero-h4">
                                <span class="typed"></span>
                            </h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>





        <!--FINAL HERO IMAGE-->
        <!--ABOUT-->
        <div class="container-fluid">


            <div class="row about d-flex align-items-center">



                <div class="col-12">



                    <!--<a href="/portfolio">
                    <div id="designer" class="designer" style="opacity: 1;">
                      <div id="designer-desc" class="description" style="opacity: 1;">
                        <h1>designer</h1>
                        <p>UI/UX Designer with a passion for designing beautiful and functional user experiences.</p>
                        <p>Product designer specialising in UI design and design systems.</p>
                      </div>
                    </div>
                  </a>
      
                  <a href="/about">
                    <div id="coder" class="coder" style="opacity: 1;">
                      <div id="coder-desc" class="description" style="opacity: 1;">
                        <h1><span class="chevron-left">&lt;</span>coder<span class="chevron-right">&gt;</span></h1>
                        <p>Front end developer who writes clean, elegant and efficient code.</p>
                      </div>
                    </div>
                  </a>-->



                    <h4 id="sobreMi" class="title">SOBRE MÍ</h4>
                    <hr class="line">
                    <p class="main-text">Mi nombre es Marcelo Rearte vivo en Buenos Aires, Argentina. Amo viajar, hacer deportes y tomar cafe.
                        En cuanto a mi perfil profesional soy activo y curioso por lo que siempre estoy buscando aprender algo nuevo. Apasionado del diseño y desarrollo digital.</p>
                    <!-- Services Section-->
                    <div class="services" id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-crop" aria-hidden="true"></i>
                                    <h4>WEB DESIGN</h4>
                                    <p>Transformo las ideas en diseños, utilizando herramientas como Figma, Photoshop e Ilustraitor</p>
                                </div>
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    <h4>UX/UI DESIGN</h4>
                                    <p>Convierto problemas en diseños intuitivos y amigables</p>
                                </div>
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-code" aria-hidden="true"></i>
                                    <h4>WEB DEVELOPMENT</h4>
                                    <p>Plasmo las ideas en código.
                                        Manejo las tecnologías JS, PHP, React, MySQL, FireBase.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>





            </div>
        </div>
        <!--FIN ABOUT-->
        <!--PROYECTOS-->
        <div class="proyectos">
            <div class="row">
                <div class="col-12 d-flex justify-content-center space">
                    <a name="proyectos" id="proyectos">
                        <h4>ALGUNOS DE MIS ÚLTIMOS PROYECTOS</h4>
                        <hr class="line">
                    </a>

                </div>

            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a short card.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FINAL PROYECTOS-->
        <!--CONTACTO-->
        <div class="row">
            <div class="col-12  d-flex justify-content-center space">
                <a name="Contacto" id="contacto">
                    <h4>CONTACTAME</h4>
                    <hr class="line">
                </a>
            </div>
        </div>
        <form class="row" action="mailto:marceloreart@hotmail.com" method="post">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3">
                <label for="inputName4" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="inputName4">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Contame cómo te puedo ayudar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="d-grid gap-2 col-6 mx-auto space">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
            <div class="col-md-3"></div>
        </form>
        <!--FIN CONTACTO-->
        <!--FOOTER-->
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light navbar-nav">
                <div class="container-fluid">
                    <div class="nav_img2">
                        <a>
                            ©️ 2022 Marcelo Rearte </a>
                    </div>





                    <div class="navbar-nav nav_items2">
                        <a class="nav-link" href="https://github.com/marceloreart" target="_blank"> <img src="/assets/image/github.png" alt="github logo"></a>
                        <a class="nav-link" href="https://www.linkedin.com/in/marcelo-rearte-becerra-8a4043198/" target="_blank"><img src="/assets/image/linkedin.png" alt="linkedin logo"></a>
                        <a class="nav-link" href="https://www.behance.net/marcelorearte" target="_blank"> <img src="/assets/image/behance.png" alt="behance logo"></a>

                    </div>

                </div>
            </nav>

        </div>
        <!--FIN FOOTER-->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
<!--<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portafolio</title>

    <script src="2d.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        body {
            width: 100%;
            overflow: visible;
            background-color: black !important;
            color: white !important;

        }
    </style>
</head>

<body>
    <canvas style="position: absolute;top:0;left:0;z-index: -1;" id="canvas" width="1300" height="2100"></canvas>

    <div class="container">

        <div class="tit-5 container ">

            <h1 class="tit mt-5 display-3 animate__animated animate__flipInX" style="font-size :8rem !important;">Hola! Soy <span style="font-family: 'Comforter Brush', cursive;">Gisele,</span> <br></h1>
            <p class="tit-2 lead animate__animated animate__flipInX" style="font-size :3rem !important; color:grey!important;">FullStack Sotfware Developer Sr.</p>
            <hr class="tit-3" class="my-4">
            <p>Más Información | <a name="" id="" href="#contact">Contactame</a> </p>


        </div>
    </div>
    <div class="container bg-dark">

        <h2 class="text-white ">Mi portfolio</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php #leemos proyectos 1 por 1
            foreach ($proyectos as $proyecto) { ?>
                <div class="col">
                    <div class="card border border-3 shadow w-100">
                        <a>
                            <img class="card-img-top" width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo $proyecto['nombre']; ?></h5>
                            <p class="card-text text-dark"><?php echo $proyecto['descripcion']; ?></p>
                            <p class="card-text text-dark"><?php echo $proyecto['url']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <div id="contact" class="container text-center">
        <header>
            <h2>Contactame</h2>
        </header>

        <div class="container d-flex justify-content-center">
            <div class="border-3 col-8">
                <form action="enviar.php" method='post'>
                    <div class="mb-3">

                        <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                        <br>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                        <br>
                        <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
                    </div>
                    <div class="mb-3">

                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motivo" required>
                        <br>
                        <textarea class="form-control" name="contenido" id="contenido" cols="10" rows="5" placeholder="Mensaje" required></textarea>
                    </div>


                    <button class="btn btn-light"><a id='WSP' href="" Target="_blank">Enviar Whatsapp</a></button>
                    <button type="submit" class="btn btn-light"> Enviar Mail </button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Diseñado por Gisele M.Gonzalez</a>
            </li>

        </ul>
    </footer>
    <script src="js.js"></script>
    <script src="envio.js"></script>
</body>

</html>-->