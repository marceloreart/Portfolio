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
                            Marcelo Rearte | PHP Developer & UX/UI Designer
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse nav_items" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link " aria-current="page" href="#sobreMi">About</a>
                            <a class="nav-link" href="#proyectos">Projects</a>
                            <a class="nav-link" href="#Contacto">Contact</a>

                        </div>
                        <div class="navbar-nav">
                            <a class="nav-link" href="https://github.com/marceloreart" target="_blank"> <img src="/assets/image/github.png" alt="github logo"></a>
                            <a class="nav-link" href="https://www.linkedin.com/in/marcelo-rearte-becerra-8a4043198/" target="_blank"><img src="/assets/image/linkedin.png" alt="linkedin logo"></a>
                            <a class="nav-link" href="https://www.behance.net/marcelorearte" target="_blank"> <img src="/assets/image/behance.png" alt="behance logo"></a>
                            <a class="nav-link" href="/index.php">Español</a>
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
                            <h1 class="hero-title">Hi, I'm Chelo</h1>
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
        <div class="row about d-flex align-items-center">

            <div class="row">

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



                    <h4 id="sobreMi" class="title">ABOUT</h4>
                    <hr class="line">
                    <p class="main-text">
                        My name is Marcelo Rearte, I live in Buenos Aires, Argentina. I love to travel, do sports and drink coffee.
                        Regarding my professional profile, I am active and curious, so I am always looking to learn something new. Passionate about design and digital development.</p>
                    <!-- Services Section-->
                    <div class="services" id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-crop" aria-hidden="true"></i>
                                    <h4>WEB DESIGN</h4>
                                    <p>I become ideas into designs, using tools like Figma, Photoshop and Illustrator</p>
                                </div>
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-desktop" aria-hidden="true"></i>
                                    <h4>UX/UI DESIGN</h4>
                                    <p>I enjoy turning complex problems into simple, beautiful and intuitive designs.</p>
                                </div>
                                <div class="col-md-4 col-xs-12 text-center">
                                    <i class="fa fa-code" aria-hidden="true"></i>
                                    <h4>WEB DEVELOPMENT</h4>
                                    <p>I translate ideas into code.
                                        I handle JS, PHP, React, MySQL, FireBase technologies.
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
                        <h4>SOME OF MY LASTEST WORKS</h4>
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
                    <h4>SEND ME AN EMAIL</h4>
                    <hr class="line">
                </a>
            </div>
        </div>
        <form class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-3">
                <label for="inputName4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputName4">
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Tell me, How could I help you?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="d-grid gap-2 col-6 mx-auto space">
                <button type="submit" class="btn btn-dark">Send</button>
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