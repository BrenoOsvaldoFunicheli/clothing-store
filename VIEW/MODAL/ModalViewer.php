<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModalViewer
 *
 * @author osval
 */
include_once '../CONTROLLER/CategoriaController.php';

class ModalViewer {

    //put your code here
    public static function createModalProducts($path) {
        $resultCat = categoriaController::getCategorias();
        ?>

        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="view">Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= $path ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="form-group ">
                                    <img id="uploadPreview" src='' class=" img-thumbnail" style="width: 100%; height: 10%;" />
                                    <input id="uploadImage" type="file" name='arquivo' onchange="PreviewImage();" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="idPro" name="idPro" disabled="false" value="">
                                <input type="hidden" class="form-control" id="option" name="option" value="edit" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nomePro" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Categoria</label>
                                <select name="catPro" id="catego" class="col-form-label">
                                    <?php foreach ($resultCat as $resultados) { ?>
                                        <option class="col-form-label" value="<?php echo"$resultados[0]" ?>"><?= $resultados[1] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">recomendacao</label>
                                <input type="text" class="form-control" id="rec" name="recPro" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Valor</label>
                                <input type="text" class="form-control" id="val" name="valPro" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Material</label>
                                <input type="text" class="form-control" id="mat" name="matPro" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Descrição</label>
                                <textarea class="form-control" id="desc" name="descPro" disabled="true"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" disabled="false" id="save" >Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <?php
    }

    public static function createModalMessenger() {
        ?>
        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="view">Produto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <figure></figure>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Id</label>
                                <input type="text" class="form-control" id="id" disabled="true" value="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Assunto</label>
                                <input type="text" class="form-control" id="ass" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">mensagem</label>
                                <textarea type="text" class="form-control" id="msg" disabled="true"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">E-mail</label>
                                <input class="form-control" id="email" disabled="true">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Telefone</label>
                                <input class="form-control" id="tel" disabled="true">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }

    public static function createModalCategoria($path) {
        ?>


        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="view">Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= $path ?>" method="post">

                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input type="hidden" class="form-control" id="id" name="id">
                                <input type="hidden" class="form-control" id="option" name="option" value="edit" disabled="true">
                                <input type="text" class="form-control" id="nome" name="nome" disabled="true">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success" disabled="false" id="save" >Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--editar-->


        <?php
    }

    public function createModalPedido($path) {
        ?>
        <div class = "modal fade" id = "view" tabindex = "-1" role = "dialog" aria-labelledby = "exampleModalLabel" aria-hidden = "true">
            <div class = "modal-dialog" role = "document">
                <div class = "modal-content">
                    <div class = "modal-header">
                        <h5 class = "modal-title" id = "view">Produto</h5>
                        <button type = "button" class = "close" data-dismiss = "modal" aria-label = "Close">
                            <span aria-hidden = "true">&times;
                            </span>
                        </button>
                    </div>
                    <div class = "modal-body">
                        <form action="<?= $path ?>" method="post">

                            <div class = "form-group">
                                <input type = "hidden" class = "form-control" id = "idPed" disabled = "true" value = "<?php ?>">
                            </div>
                            <div class = "form-group">
                                <label for = "recipient-name" class = "col-form-label">Produto</label>
                                <input type = "text" class = "form-control" id = "prodPed" disabled = "true">
                            </div>

                            <div class = "form-group">
                                <label for = "message-text" class = "col-form-label">valor</label>
                                <input type = "text" class = "form-control" id = "telPed" disabled = "true">
                            </div>
                            <div class = "form-group">
                                <label for = "message-text" class = "col-form-label">Qtd</label>
                                <input class = "form-control" id = "qtdPed" disabled = "true">
                            </div>
                            <div class = "form-group">
                                <label for = "message-text" class = "col-form-label">Tam</label>
                                <input class = "form-control" id = "tamPed" disabled = "true">
                            </div>
                            <div class = "form-group">
                                <label for = "message-text" class = "col-form-label">Cor</label>
                                <input class = "form-control" id = "corPed" disabled = "true">
                            </div>

                            <div class = "modal-footer">
                                <button type = "button" class = "btn btn-secondary" data-dismiss = "modal">Close</button>
                                <button type = "submit" class = "btn btn-success" disabled = "false" id = "Finalizar" >Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }

    }
    