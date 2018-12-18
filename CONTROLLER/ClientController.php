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
    $option =$_POST['option'];
    if ($option == 'exist') {
        $dao = new ClientDAO();
        $result = $dao->exist($email, $senha);

        if (count($result) > 0) {
            return true;
        } else {
            return false;
        }
    }else if($option == 'save'){
        $dao = new ClientDAO();
        $dao->save();
    }
}
