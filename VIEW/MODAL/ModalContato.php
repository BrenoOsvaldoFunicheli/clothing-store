<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModalContato
 *
 * @author osval
 */
class ModalCadastro {

    //put your code here
    public static function createModalMain($path) {
        ?>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nova Mensagem</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= $path ?>" method="POST">
                            <input type="hidden" name="option" value="save">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="email" class="form-control" name="email" id="recipient-name" required="true" placeholder="Test@Server.domain">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" name="nome" id="recipient-name" required="true" placeholder="Coloque seu Nome">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Assunto:</label>
                                <input type="text" class="form-control" id="recipient-name" name="assunto" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Telefone:</label>
                                <input type="text" class="form-control" id="recipient-name" name="tel" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Mensagem:</label>
                                <textarea class="form-control" id="message-text" name="msg"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div> 
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }

    public static function createModalSaveCategory($path) {
        ?>

        <div class="modal fade" id="cadCat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Adicionar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= $path ?>">
                            <input type="hidden" name="option" value="save" />

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nomeCat" name="nomeCat">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="salvar">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }

    public static function createModalSaveProducts($path) {
        include_once '../CONTROLLER/CategoriaController.php';
        $resultCat = categoriaController::getCategorias();
        ?>
        <div class="modal fade" id="cadPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="adPro">Adcionar Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= $path ?>" enctype="multipart/form-data">
                            <input type="hidden" name="option" value="save" />
                            <div class="form-group ">
                                <img id="uploadPreviewPro"  class=" img-thumbnail" style="width: 100%; height: 10%;" />
                                <input id="uploadImagePro" type="file" name='arquivo' onchange="PreviewImage();" />
                            </div>

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nomePro" name="nomePro">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descrição:</label>
                                <textarea class="form-control" id="descPro" name="descPro"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descrição:</label>
                                <select name="catPro" class="col-form-label">
                                    <?php foreach ($resultCat as $resultadoCat) { ?>
                                        <option class="col-form-label" value="<?= $resultadoCat[0] ?>"><?= $resultadoCat[1] ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Recomendações:</label>
                                <textarea class="form-control" id="recPro" name="recPro"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Material:</label>
                                <textarea class="form-control" id="matPro" name="matPro"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Valor:</label>
                                <input type="number" step="0.45" min="1" class="form-control" id="valPro" name="valPro">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" id="pro">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }

    public function createModalLogin($path) {
        ?>
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>

                    </div>
                    <div class="modal-body">
                        <form action="<?= $path ?>" method="post">
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                                    <input type="hidden" name="option" value="exist">
                                    <label for="inputEmail">Email address</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-label-group">
                                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required="required">
                                    <label for="inputPassword">Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="remember-me">
                                        Remember Password
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-block">Login</button>
                            <div class="modal-footer">
                                <a class="d-block small mt-3" href="RegisterClient.php">Register an Account</a>
                                <a class="d-block small" href="#">Forgot Password?</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--        <div class="modal-body" id="">

                    <div class="container">
                        <div class="card card-login mx-auto mt-5">
                            <div class="card-header">Login</div>
                            <div class="card-body">
                                
                                <div class="text-center">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
        <?php
    }

}
