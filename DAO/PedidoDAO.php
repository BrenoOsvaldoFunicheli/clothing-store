<?php

include_once 'Connection.php';

class PedidoDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function search() {
        $sql = "SELECT * FROM tb_pedido WHERE situacao = 'andamento' ORDER BY id_pedido DESC";
        $stmt = $this->db->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_pedido"
                . " WHERE id_pedido = :id AND situacao ='andamento'";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;
        $stmt->bindParam(':id', $values1);

        $stmt->execute();
    }

    public function edit($id) {
        $sql = "UPDATE tb_pedido SET situacao='concluido' WHERE id_pedido =:id";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;
        $stmt->bindParam(':id', $values1);

        $stmt->execute();
    }

    public function insert($prod, $nome, $email, $tel, $qtd, $tam, $cor) {
        $sql = "INSERT INTO `tb_pedido`(`id_produto`, `nome`, `email`, `telefone`, `qtd`, `tam`, `cor`, `situacao`, `data`)" . " VALUES(?,?,?,?,?,?,?,'andamento',NOW())";

        $stmt = $this->db->prepare($sql);
        $values1 = $prod;
        $values2 = $nome;
        $values3 = $email;
        $values4 = $tel;
        $values5 = $qtd;
        $values6 = $tam;
        $values7 = $cor;

        $stmt->bindParam(1, $values1);
        $stmt->bindParam(2, $values2);
        $stmt->bindParam(3, $values3);
        $stmt->bindParam(4, $values4);
        $stmt->bindParam(5, $values5);
        $stmt->bindParam(6, $values6);
        $stmt->bindParam(7, $values7);

        $stmt->execute();
    }

}
