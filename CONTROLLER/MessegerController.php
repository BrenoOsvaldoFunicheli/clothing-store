<?php

include_once '../DAO/MensagensDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenssegerController
 *
 * @author osval
 */
class MenssegerController {

    //put your code here
    public static function search() {
        $dao = new MensagensDAO ();
        $result = $dao->search();
        return $result;
    }

}
?>


<?php

if ($_POST['option']) {
    $option = $_POST['option'];
    $dao = new MensagensDAO ();
    if ($option == 'save') {

        $nome = $_POST['nome'];
        $assunto = $_POST['assunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];

        $result = $dao->insert($nome, $assunto, $msg, $tel, $email);
        header('Location: ../VIEW/UserMenu.php');
    } else if ($option == 'remove') {
        $id = $_POST['rem'];
        $dao->delete($id);
    header('Location: ../VIEW/UserMenu.php');
    }
}