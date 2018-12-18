<!DOCTYPE html>
<?php
include_once '../CONTROLLER/CategoriaController.php';
$search = new categoriaController();
$categorias = $search->getCategorias();
session_start();
//$_SESSION['navigation'] = 'nav';
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Homepage - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom styles for this template -->
    </head>

    <body>

        <!-- Navigation -->
        <?php include_once './COMPONENTS/Header.php'; ?>
        <?php include_once 'MODAL/ModalContato.php'; ?>
        <?php include_once './COMPONENTS/Footer.php'; ?>

        <?php Header::getGeneralHeader(); ?>
        <!-- Page Content -->

        <div class="container">

            <div class="row">
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

                <script type="text/javascript" src="../js/functionProducts.js">

                </script>
                
                <!--CATEGORIAS-->
                <div class="col-lg-3">
                    <h1 class="my-4">Categoria</h1>
                    <hr>
                    <div class="list-group">
                        <?php foreach ($categorias as $categoria) { ?>
                            <a href="#" id="<?= $categoria[0] ?>" class="list-group-item cat"><?= $categoria[1] ?></a>
                        <?php } ?>
                    </div>
                </div>
                <!-- /.col-lg-3 -->

                <div class="col-lg-9">

                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <!-- COGIDO PHP AQUI-->                        
                            
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="../img/bg-signup.jpg" alt="First slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <div class="row conteudo">
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-lg-9 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <?php Footer::getGeneralFooter(); ?>
        <!-- Footer -->

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
