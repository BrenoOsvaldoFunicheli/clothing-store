<?php

include_once '../DAO/PedidoDAO.php';
include_once '../DAO/VendaDAO.php';

/**
 * Description of OrderController
 *
 * @author osval
 */
class OrderController {

    //put your code here
    public static function search() {
        $dao = new PedidoDAO();
        $result = $dao->search();
        return $result;
    }
    
    public static function searchSales() {
        $dao = new VendaDAO();
        $result = $dao->search();
        return $result;
    }

}

if ($_POST) {
    $option = $_POST['option'];
    $dao = new PedidoDAO();
    if ($option == 'remove') {
        $id = $_POST['rem'];
        $dao->delete($id);
    }else if($option == 'finish'){
        $id = $_POST['idPed'];
        $dao->edit($id);
    }
}