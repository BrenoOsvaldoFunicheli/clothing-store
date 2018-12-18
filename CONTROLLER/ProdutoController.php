<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../DAO/ProdutoDAO.php';

/**
 * Description of SaveController
 *
 * @author osval
 */
class ProdutoController {

    private $dao;

    //put your code here
    public function getProdutoByCategoria($id_categoria) {
        $this->dao = new ProdutoDAO();
        $categorias = $this->dao->findByCategoria($id_categoria);
        return $categorias;
    }

    public function getProductById($id) {
        $this->dao = new ProdutoDAO();
        $categorias = $this->dao->findById($id);
        return $categorias;
    }

    public static function search() {
        $dao = new ProdutoDAO ();
        $result = $dao->search();
        return $result;
    }

}

?><?php

if ($_POST) {
    $dao = new ProdutoDAO ();
    $option = $_POST['option'];
    if (($option == 'save') || ($option == 'edit')) {

        $nome = $_POST['nomePro'];
        $desc = $_POST['descPro'];
        $material = $_POST['matPro'];
        $val = $_POST['valPro'];
        $cat = $_POST['catPro'];
        $recomendacao = $_POST['recPro'];

        if ($option == 'save') {
            $dao->insert($nome, $cat, $desc, $material, $recomendacao, $val);
            global $id;
            $GLOBALS['id'] = $dao->getLast();
        } else if ($option == 'edit') {
            global $id;
            $GLOBALS['id'] = $_POST['idPro'];
            
            $dao->update($id, $cat, $nome, $desc, $material, $recomendacao, $val);
        }

        if ($_FILES) {
            $arquivo = $_FILES["arquivo"]["tmp_name"];
            $tamanho = $_FILES["arquivo"]["size"];
            $tipo = $_FILES["arquivo"]["type"];
            $nome = $_FILES["arquivo"]["name"];
            $titulo = $_POST["nomePro"];
            include_once '../DAO/ImgDAO.php';

            if ($arquivo != "none") {
                $fp = fopen($arquivo, "rb");
                $conteudo = fread($fp, $tamanho);
                $conteudo = addslashes($conteudo);
                fclose($fp);
                if ($option == 'save') {
                    $img = new ImgDAO();
                    
                    $img->insert($nome, $id[0]['id'], $titulo, $conteudo, $tipo);
                } else if ($option == 'edit') {
                    $img = new ImgDAO();
                    $img->delete($id);
                    $img->insert($nome, $id, $titulo, $conteudo, $tipo);
                }
            }
//            header("Location: ../VIEW/UserMenu.php");
        }
    } else if ($option == 'remove') {
        $id = $_POST['rem'];
        $dao->delete($id);
        header("Location: ../HELPERS/imgController.php?id=$id&option=remove");
    }
}
?>
