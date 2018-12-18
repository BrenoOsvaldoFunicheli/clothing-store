<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>SB Admin - Register</title>

        <!-- Bootstrap core CSS-->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template-->
        <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Custom styles for this template-->
        <link href="../css/sb-admin.css" rel="stylesheet">

    </head>

    <body class="bg-dark">

        <div class="container">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Formulário de Cadastro</div>
                <div class="card-body">
                    <form action="../CONTROLLER/ClientController.php" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="firstName" name="nome" class="form-control" placeholder="Nome" required="required" autofocus="autofocus">
                                        <input type="hidden" name="option" value="save" class="form-control">
                                        <label for="firstName">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="CPF" name="CPF" class="form-control" placeholder="CPF" required="required">
                                        <label for="CPF">CPF</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="Telefone" name="tel" class="form-control" placeholder="Telefone" required="required" autofocus="autofocus">
                                        <label for="Telefone">Telefone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="Celular" name="cel" class="form-control" placeholder="Celular" required="required">
                                        <label for="Celular">Celular</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="Cidade" name="cid" class="form-control" placeholder="Cidade" required="required" autofocus="autofocus">
                                        <label for="Cidade">Cidade</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="CEP" name="CEP" class="form-control" placeholder="CEP" required="required">
                                        <label for="CEP">CEP</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                                <label for="inputEmail">Email address</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Password" required="required">
                                        <label for="inputPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                                        <label for="confirmPassword">Confirm password</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">
                                Sexo
                            </label>
                            <div class="form-label">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="sexo btn btn active">
                                        <input type="radio" name="sexo" value="M" id="option1" autocomplete="off" checked> Masculino
                                    </label>
                                    <label class="btn sexo">
                                        <input type="radio" name="sexo" value="F" id="option2" autocomplete="off"> Feminino
                                    </label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Register</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small mt-3" href="login.php">Login Page</a>
                        <a class="d-block small" href="#">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
            $('.sexo').click(function () {
                $('label').removeClass('active');
                $('label').removeClass('btn-primary');
                $(this).addClass('active')
                $(this).addClass('btn-primary');

            });
        </script>
        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    </body>

</html>
