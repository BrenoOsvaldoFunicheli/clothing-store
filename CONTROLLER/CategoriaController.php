<?php

//include '../DAO/MensagensDAO.php';
//include '../DAO/PedidoDAO.php';
//include '../DAO/ProdutoDAO.php';
//include '../DAO/ImgDAO.php';
include '../DAO/CategoriaDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SearchController
 *
 * @author osval
 */
class categoriaController {

    //put your code here


    public static function getCategorias() {
        $dao = new CategoriaDAO();
        $categorias = $dao->search();
        return $categorias;
    }

    public static function findCategoryById($id) {
        $dao = new CategoriaDAO();
        $categorias = $dao->findById($id);
        return $categorias;
    }

}

if ($_POST) {
    include_once '../DAO/CategoriaDAO.php';
    $dao = new CategoriaDAO();
    $option = $_POST['option'];
    if ($option == 'edit') {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $dao->update($id, $nome);
        header('Location: ../VIEW/UserMenu.php');
    } else if ($option == 'remove') {
        $id = $_POST['rem'];
        $dao->delete($id);
        header('Location: ../VIEW/UserMenu.php');
    }else if ($option == 'save') {
        $nome = $_POST['nomeCat'];
        $dao->insert($nome);
        header('Location: ../VIEW/UserMenu.php');
    }
}
