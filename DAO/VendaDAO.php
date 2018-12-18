<?php

include_once 'Connection.php';

class VendaDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function search() {
        $sql = "SELECT * FROM tb_pedido WHERE situacao = 'concluido'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}
