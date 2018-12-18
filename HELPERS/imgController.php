<?php

include_once '../DAO/ImgDAO.php';

$option = $_GET['option'];
if ($option == 'view') {
    $imgDao = new ImgDAO();

    $img = $imgDao->findById($_GET['id']);

    foreach ($img as $resultado) {
        $tipo = $resultado['arquivo_tipo'];
        $conteudo = $resultado['arquivo_conteudo'];
        header("Content-Type: $tipo");
        echo $conteudo;
    }
} else if ($option == 'remove') {
    $id = $_GET['id'];
    $dao = new ImgDAO();
    $dao->delete($id);
    header('Location: ../VIEW/UserMenu.php');
}