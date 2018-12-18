<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author osval
 */
include_once 'Connection.php';

class UsuarioDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    //put your code here
    public function isExist($nome, $senha) {
        $sql = "SELECT * FROM `usuario` WHERE login = :login AND senha = :senha ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $nome);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}
