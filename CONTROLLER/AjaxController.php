<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$option = $_POST['option'];
$id_categoria = $_POST['id_categoria'];
include_once './CategoriaController.php';
include_once './ProdutoController.php';
$search = new ProdutoController();

$produtos = $search->getProdutoByCategoria($id_categoria);
foreach ($produtos as $produto) {
    ?>
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href='PageItem.php?id=<?= $produto[0] ?>' id="<?=$produto[0]?>"><?=$produto[2]?></a>
                </h4>
                <h5><?=$produto[3]?></h5>
                <p class="card-text">$RS <?=$produto[6]?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>
<?php } ?>