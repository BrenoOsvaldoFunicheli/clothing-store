<?php

include_once 'Connection.php';

class ProdutoDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function search() {
        $sql = "SELECT * FROM tb_produto";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function findByCategoria($id_categoria) {
        $sql = "SELECT * FROM tb_produto WHERE id_categoria='$id_categoria'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function findById($id) {
        $sql = "SELECT * FROM tb_produto WHERE id='$id'";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getLast() {
        $sql = "SELECT * FROM `tb_produto` ORDER BY id DESC LIMIT 1;";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getRecent() {
        $sql = "SELECT * FROM `tb_produto` ORDER BY id DESC LIMIT 12;";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insert($nome, $cat, $desc, $material, $valor, $recomendacao) {
        $sql = "INSERT INTO tb_produto VALUES (0,'$cat','$nome','$desc','$material', '$valor', '$recomendacao')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_produto"
                . " WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;

        $stmt->bindParam(':id', $values1);

        $stmt->execute();
    }

    public function update($id, $cat, $nome, $desc, $mat, $recomendacao, $val) {
        $sql = "UPDATE `tb_produto` SET `id_categoria`='$cat',`nome`='$nome',`descricao`='$desc',`material`='$mat',`recomendacoes`='$recomendacao',`valor`='$val' WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}
