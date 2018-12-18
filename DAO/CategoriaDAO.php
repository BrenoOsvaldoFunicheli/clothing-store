<?php

include_once 'Connection.php';

class CategoriaDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function search() {
        $sql = "SELECT * FROM tb_categoria";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    public function findById($id) {
        $sql = "SELECT * FROM tb_categoria WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getLast() {
        $sql = "SELECT * FROM `tb_categoria` ORDER BY id DESC LIMIT 1;";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getRecent() {
        $sql = "SELECT * FROM `tb_categoria` ORDER BY id DESC LIMIT 12;";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert($nome) {
        $sql = "INSERT INTO tb_categoria VALUES (0,'$nome')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_categoria"
                . " WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;

        $stmt->bindParam(':id', $values1);

        $stmt->execute();
    }

    public function update($id, $nome) {
        $sql = "UPDATE tb_categoria SET nome=:nome WHERE id =:id";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;
        $values2 = $nome;

        $stmt->bindParam(':id', $values1);
        $stmt->bindParam(':nome', $values2);

        $stmt->execute();
    }

}
