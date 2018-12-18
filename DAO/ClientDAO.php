<?php

include_once 'Connection.php';
/**
 * Description of UserDAO
 *
 * @author osval
 */
class ClientDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    //put your code here
    public function findById($id) {
        $sql = "SELECT * FROM `clientes` WHERE `idClientes`='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function exist($email, $senha) {
        $sql = "SELECT * FROM `clientes` WHERE `senha`='$senha' AND `email`='$email'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function save($nome, $senha, $sexo, $cpf, $tel, $cel, $email, $cid, $cep) {
        
        $sql = "INSERT INTO `clientes`"
                . "(`nomeCliente`, `senha`, `sexo`, `pessoa_fisica`, `telefone`, `celular`, `email`, `dataCadastro`, `cidade`, `cep`) "
                . "VALUES ('$nome','$senha','$sexo','$cpf','$tel','$cel','$email',NOW(),'$cid','$cep')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

    }

}
