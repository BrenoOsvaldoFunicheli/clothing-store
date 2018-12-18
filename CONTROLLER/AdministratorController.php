
<?php
$option = $_POST['option'];
include_once '../VIEW/MODAL/ModalViewer.php';
include_once '../VIEW/MODAL/ModalDelete.php';
include_once '../CONTROLLER/CategoriaController.php';

if ($option == 'Mensagens') {
    include_once '../CONTROLLER/MessegerController.php';
    $result = MenssegerController::search();

    ModalViewer::createModalMessenger();
    ModalDelete::createModalDelete('../CONTROLLER/MessegerController.php');
    ?>
    <script type="text/javascript" src="../js/FunctionsMessager.js"></script>
    <table class="table table-hover table-striped table-bordered table-responsive-sm table-responsive-md table-responsive-">
        <thead class="">
            <tr>
                <th >Id</th>
                <th>Nome</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $value) { ?>
                <tr>
                    <td id="id<?= $value[0] ?>"><?= $value[0] ?></td>
                    <td id="nome<?= $value[0] ?>"><?= $value[1] ?></td>
                    <td id="ass<?= $value[0] ?>"><?= $value[2] ?></td>
                    <td id="">msg</td>
                    <td id="tel<?= $value[0] ?>"><?= $value[4] ?></td>
                    <td id="email<?= $value[0] ?>"><?= $value[5] ?></td>
                    <td>
                        <button type="button" id="<?= $value[0] ?>" class="btn btn-primary msg-p" data-toggle="modal" data-target="#view" data-whatever="view">Visualizar</button>
                        <button type="button" id="<?= $value[0] ?>" class="btn btn-danger msg-d" data-toggle="modal" data-target="#delete" data-whatever="delete">Excluir</button>
                    </td>
                </tr>
            <input type="hidden" id="msg<?= $value[0] ?>" value="<?= $value[3] ?>">
            <input type="hidden" id="msg<?= $value[0] ?>" value="<?= $value[3] ?>">
        <?php } ?>
        </tbody>
    </table>

    <?php
} else if ($_POST['option'] == 'Produtos') {
    include_once '../CONTROLLER/ProdutoController.php';

    $result = ProdutoController::search();
    ModalViewer::createModalProducts('../CONTROLLER/ProdutoController.php');
    ModalDelete::createModalDelete('../CONTROLLER/ProdutoController.php');
    ?>

    <script type="text/javascript" src="../js/functionProducts.js"></script>
    <table border = "0" class = "table table-hover table-striped table-responsive-sm table-responsive-md table-responsive-">
        <thead>
            <tr>
                <th></th>
                <th>Id</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Descricao</th>
                <th>Material</th>
                <th>Recomendacoes</th>
                <th>Valor</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($result as $value) {
                $categorias = categoriaController::findCategoryById($value[1]);
                ?>
                <tr>
                    <?php echo"<td><img src='../HELPERS/imgController.php?option=view&id=$value[0]' width='120px'></td>"; ?>
                    <td id="id<?= $value[0] ?>"><?= $value[0] ?></td>
                    <td id="nome<?= $value[0] ?>"><?= $value[2] ?></td>
                    <td id="cat<?= $value[0] ?>"><?= $categorias[0][1] ?></td>
                    <td id="desc<?= $value[0] ?>"><?= $value[3] ?></td>
                    <td id="mat<?= $value[0] ?>"><?= $value[4] ?></td>
                    <td id="rec<?= $value[0] ?>"><?= $value[5] ?></td>
                    <td id="val<?= $value[0] ?>"><?= $value[6] ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" id="<?= $value[0] ?>" data-toggle="modal" data-target="#view" data-whatever="view">Visualizar</button>
                        <button type="button" class="btn btn-success v"  id="<?= $value[0] ?>" data-toggle="modal" data-target="#view" data-whatever="view">Editar</button>
                        <button type="button" id="<?= $value[0] ?>" class="btn btn-danger" data-toggle="modal" data-target="#delete" data-whatever="delete">Excluir</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

        <?php
    } else if ($_POST['option'] == 'Pedidos') {
        include_once '../CONTROLLER/OrderController.php';
        ModalDelete::createModalDelete('../CONTROLLER/OrderController.php');
        $result = OrderController::search();
        ?>
        <script type="text/javascript" src="../js/FunctionsPedido.js"></script>

        <table  class = "table table-hover table-striped table-responsive-sm table-responsive-md table-responsive-">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Produto</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Qtd</th>
                    <th>Tam</th>
                    <th>Cor</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $value) { ?>

                    <tr>
                        <td id="id<?= $value[0] ?>"><?= $value[0] ?></td>
                        <td id="prod<?= $value[0] ?>"><?= $value[1] ?></td>
                        <td id="nome<?= $value[0] ?>"><?= $value[2] ?></td>
                        <td id="email<?= $value[0] ?>"><?= $value[3] ?></td>
                        <td id="tel<?= $value[0] ?>"><?= $value[4] ?></td>
                        <td id="qtd<?= $value[0] ?>"><?= $value[5] ?></td>
                        <td id="tam<?= $value[0] ?>"><?= $value[6] ?></td>
                        <td id="cor<?= $value[0] ?>"><?= $value[7] ?></td>
                        <td>
                            <button type="button"  class="btn btn-primary view-p"  data-toggle="modal" data-target="#view" data-whatever="view">Visualizar</button>
                            <button type="button"  class="btn btn-success view-e" data-toggle="modal" data-target="#view" data-whatever="view">Finazalizar</button>
                            <button type="button"  id="<?= $value[0] ?>" class="btn btn-danger view-d"  data-toggle="modal" data-target="#delete" data-whatever="delete">Excluir</button>
                        </td>
                    </tr>

                    <!--id=""-->                   
                <?php } ?>
            </tbody>
        </table>
    <?php
    } else if ($_POST['option'] == 'Vendas') {
        include_once '../CONTROLLER/OrderController.php';
        $result = OrderController::searchSales();
        ?>
        <table  class = "table table-hover table-striped table-responsive-sm table-responsive-md table-responsive-">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Produto</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Qtd</th>
                    <th>tam</th>
                    <th>Cor</th>
                    <th>Data</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach ($result as $value) { ?>
                    <tr>
                        <td><?= $value[0] ?></td>
                        <td><?= $value[1] ?></td>
                        <td><?= $value[2] ?></td>
                        <td><?= $value[3] ?></td>
                        <td><?= $value[4] ?></td>
                        <td><?= $value[5] ?></td>
                        <td><?= $value[6] ?></td>
                        <td><?= $value[7] ?></td>
                        <td><?= $value[9] ?></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#view" data-whatever="view">Visualizar</button>

                        </td>
                    </tr>
    <?php } ?>
            </tbody>
        </table>
        <?php
    } else if ($_POST['option'] == 'Categorias') {
        ModalViewer::createModalCategoria('../CONTROLLER/CategoriaController.php');
        ModalDelete::createModalDelete('../CONTROLLER/CategoriaController.php');

        $result = categoriaController::getCategorias();
        ?>
        <script type="text/javascript" src="../js/FunctionsCategoria.js"></script>

        <table  class = "table table-hover table-striped table-responsive-sm table-responsive-md table-responsive-">
            <thead>

                <tr>
                    <th>Id</th>
                    <th>Produto</th>
                    <th>Opções</th>

                </tr>
            </thead>
            <tbody>
    <?php foreach ($result as $value) { ?>
                    <tr>

                        <td id="id<?= $value[0] ?>"><?= $value[0] ?></td>
                        <td id="nome<?= $value[0] ?>"><?= $value[1] ?></td>
                        <td>
                            <button type="button"  id="<?= $value[0] ?>" class="btn btn-primary view-p" data-toggle="modal" data-target="#view" data-whatever="view">Visualizar</button>
                            <button type="button"  id="<?= $value[0] ?>" class="btn btn-success view-e" data-toggle="modal" data-target="#view" data-whatever="view">Editar</button>
                            <button type="button"  id="<?= $value[0] ?>" class="btn btn-danger view-d" data-toggle="modal" data-target="#delete" data-whatever="view">Excluir</button>

                        </td>
                    </tr>
    <?php } ?>
            </tbody>
        </table>
    <?php } ?>

