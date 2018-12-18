<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ModalDelete
 *
 * @author osval
 */
class ModalDelete {

    //put your code here
    public static function createModalDelete($path) {
        ?>
        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="delete">Exclusão</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= $path ?>" method="POST">
                        <div class="modal-body">
                            Deseja mesmo excluir esse produto
                            <div class="form-group">
                                <input type="hidden" id="rem" name="rem" value="ok">
                                <input type="hidden" id="option" name="option" value="remove">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger delete">Excluir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }

    public function createModalCategoria($path) {
        ?>

        <?php
    }

}
?>

