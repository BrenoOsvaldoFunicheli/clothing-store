<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Grayscale - Start Bootstrap Theme</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/grayscale.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <?php
        include_once './VIEW/MODAL/ModalContato.php';
        include_once 'VIEW/COMPONENTS/Footer.php';
        include_once './VIEW/COMPONENTS/Header.php';
        ModalCadastro::createModalMain('./CONTROLLER/MessegerController.php');
        session_start();
        Header::getMainHeader();
        ?>
        <!-- Header -->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Estampaty</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">A sua loja preferida de estampas em camisas e uniformes</h2>
                    <a href="#about" class="btn btn-primary js-scroll-trigger">Compre já</a>
                </div>
            </div>
        </header>

        <!-- About Section -->
        <section id="about" class="about-section text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Acesso Mobile</h2>
                        <p class="text-white-50">A Estampaty oferece atendimento personalizado via telefone
                            <a href="#e-mail-cad">ou e-mail</a>
                            . desde pequenos pedidos ate grandes pedidos.</p>
                    </div>
                </div>
                <img src="img/ipad.png" class="img-fluid" alt="">
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="projects-section bg-light">
            <div class="container">

                <!-- Featured Project Row -->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7">
                        <img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt="">
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Confecção De Camisas</h4>
                            <p class="text-black-50 mb-0">Nós da estampaty, possuimos um 10 anos de experiência na confecção de camisas, camisetas e uniformes personalizados. Nosso trabalho é transformar o pensamento de nossos clientes em vestimenta.</p>
                        </div>
                    </div>
                </div>

                <!-- Project One Row -->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/demo-image-01.jpg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Sublimação</h4>
                                    <p class="mb-0 text-white-50">Processo de estamparia onde você imprime um desenho em um papel para sublimação com tinta sublimática, e depois, através de uma prensa quente, transfere o desenho do papel para a peça de roupa.</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Two Row -->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6">
                        <img class="img-fluid" src="img/demo-image-02.jpg" alt="">
                    </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Serigrafia</h4>
                                    <p class="mb-0 text-white-50">Uma das técnicas mais utilizadas pelas fábricas e confecções é a serigrafia — que é um dos métodos mais antigos de estamparia. Para sua realização, é necessária a gravação de telas com o negativo das imagens que serão passadas para o tecido.</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- Signup Section -->
        <section id="signup" class="signup-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">

                        <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                        <h2 class="text-white mb-5">Pedidos Personalizados</h2>

                        <form class="form-inline d-flex">

                            <button type="button" class="btn btn-primary mx-auto" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Fale Conosco</button>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section bg-black">
            <div class="container">

                <div class="row">

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Endereço</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">Rua Ceará, 285, Villa Amorim. Guariba-SP</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 id="e-mail-cad" class="text-uppercase m-0">Email</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">
                                    <a href="#">hello@yourdomain.com</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 id="telefone-cad" class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4">
                                <div class="small text-black-50">+1 (555) 902-8832</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social d-flex justify-content-center">
                    <a href="#" class="mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="mx-2">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="mx-2">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?php Footer::getMainFooter(); ?>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/grayscale.min.js"></script>

    </body>

</html>
