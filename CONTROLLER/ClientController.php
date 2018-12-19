<?php

include_once '../DAO/ClientDAO.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author osval
 */
class ClientController {

    //put your code here
    public static function getClient($id) {
        $dao = new ClientDAO();
        $result = $dao->findById($id);
        return $result;
    }

}

if ($_POST) {
    $option = $_POST['option'];
    if ($option == 'exist') {
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        $dao = new ClientDAO();
        $result = $dao->exist($email, $senha);

        if (count($result) > 0) {
            session_start();
            $_SESSION['uCod'] = $result[0][0];
            $_SESSION['uNome'] = $result[0][1];
            header('Location: ../index.php');
        } else {
            $_SESSION['uCod'] = '0';
            $_SESSION['uNome'] = 'deslog';
        }
    } else if ($option == 'save') {
        $dao = new ClientDAO();

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $tel = $_POST['tel'];
        $cel = $_POST['cel'];
        $cid = $_POST['cid'];
        $sexo = $_POST['sexo'];
        $CEP = $_POST['CEP'];
        $CPF = $_POST['CPF'];

        print_r($_POST);
        $dao->save($nome, $senha, $sexo, $CPF, $tel, $cel, $email, $cid, $CEP);
        header('Location: ../VIEW/login.php');
    }
}
