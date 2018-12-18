<!DOCTYPE html>
<html lang="en">
    <?php
    include_once '../CONTROLLER/ProdutoController.php';
    $search = new ProdutoController();
    $id = $_GET['id'];
    $produto = $search->getProductById($id);
    session_start();
    ?>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Shop Item - Start Bootstrap Template</title>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/shop-item.css" rel="stylesheet">


    </head>

    <body>

        <?php
        include_once 'MODAL/ModalContato.php';
        include_once './COMPONENTS/Footer.php';
        include_once './COMPONENTS/Header.php';

        //<!--Page Content -->
        Header::getGeneralHeader();
        ModalCadastro::createModalMain('../CONTROLLER/MessegerController.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card mt-4">
                        <div class="card-body" >
                            <div id="cor">
                                <?php
                                echo"<img  class='card-img-top img-fluid' src='../HELPERS/imgController.php?option=view&id=$id' alt='' >";
                                ?>
                            </div>
                            <h2 class="card-title"><?= $produto[0][2] ?></h2>
                            <h3>R$ <?= $produto[0][6] ?></h3>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9733;</span>
                            5.0 stars
                        </div>
                    </div>
                    <!-- /.card -->
                    <!--card-->
                    <div class="card card-outline-secondary my-4">
                        <div class="card-header">
                            Informações do Produto
                        </div>
                        <div class="card-body">
                            <p id="esse">Descrição do Produto</p>
                            <small class="text-muted"><?= $produto[0][3] ?></small>
                            <hr>
                            <p id="esse">Informações</p>
                            <small class="text-muted"><?=$produto[0][5]?></small>
                            <p id="esse">Material</p>
                            <small class="text-muted"><?=$produto[0][4]?></small>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!--informações de compra-->
                <div class="col-lg-3">
                    <form>


                        <h4 class="my-4">Tipo de Pagamento</h4>
                        <div class="list-group">
                            <select class="form-control">
                                <option value="ch">Cheque</option>
                                <option value="din">Boleto</option>
                                <option value="car">Cartão</option>
                            </select>
                        </div>

                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                Quatidade Deseja
                            </div>
                            <input class="form-control" type="number" name="qtd" id="qtd" min="1" value="1" required="true">
                        </div>

                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                Selecione uma cor
                            </div>
                            <input class="form-control" type="color" id="CorPro" required="true">
                        </div>

                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                Selecione uma cor
                            </div>
                            <output name="tam" for="tam" class="output-tam form-control">P</output>
                            <input type="range" class="form-control-range" name="tam" value="42" min="36" max="50" step="2" id="tam">
                        </div>

                        <div class="card card-outline-secondary my-4">
                            <div class="card-header">
                                Adicionar ao Carrinho
                            </div>
                                <button type="submit" class="btn btn-success col-12">Adicionar</button>
                        </div>
                    </form>
                </div>
                <!-- /.col-lg-9 -->
            </div>
        </div>
        <!-- /.container -->

        <!-- Footer -->
        <?php Footer::getGeneralFooter(); ?>
        <script type="text/javascript" src="../js/functionsPageItem.js">

        </script>
        <!-- Bootstrap core JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $("#CorPro").change(function () {
                var x = document.getElementById("CorPro");
                $('#cor').css('background-color', x.value);
            });

        </script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
