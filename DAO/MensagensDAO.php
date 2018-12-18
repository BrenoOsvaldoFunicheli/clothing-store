<?php

include_once 'Connection.php';

class MensagensDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function insert($nome, $assunto, $msg, $telefone, $email) {
        $sql = "INSERT INTO tb_msg"
                . "(nome, assunto, mensagem, telefone, email )"
                . " VALUES (?,?,?,?,?)";

        $stmt = $this->db->prepare($sql);
        $values1 = $nome;
        $values2 = $assunto;
        $values3 = $msg;
        $values4 = $telefone;
        $values5 = $email;

        $stmt->bindParam(1, $values1);
        $stmt->bindParam(2, $values2);
        $stmt->bindParam(3, $values3);
        $stmt->bindParam(4, $values4);
        $stmt->bindParam(5, $values5);

        $stmt->execute();
    }

    public function search() {
//        $sql = "SELECT * FROM tb_aluno WHERE emailResp= :email AND senha= :senha";
        $sql = "SELECT * FROM tb_msg ORDER BY id DESC";
        $stmt = $this->db->prepare($sql);

//        $stmt->bindValue(":senha", $this->aluno->getSenha());
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_msg WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        
        $stmt->bindValue(":id", $id);
        $stmt->execute();
    }

    public function update() {
        $sql = "UPDATE `tb_msg` SET `id`=[value-1],`nome`=[value-2],`assunto`=[value-3],`mensagem`=[value-4],`telefone`=[value-5],`email`=[value-6] WHERE 1";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":nome", $this->aluno->getNome());
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getAll($aluno = '') {
        $sql = "SELECT * FROM tb_aluno WHERE nome = :nome";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":nome", $this->aluno->getNome());
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getRa() {
        $sql = "SELECT RA FROM tb_aluno WHERE emailResp= :email ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":email", $this->aluno->getEmailResp());
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getRaByNome() {
        $sql = "SELECT RA FROM tb_aluno "
                . "WHERE Nome LIKE :nome";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":nome", "%" . $this->aluno->getNome() . "%");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function getNomeByAlias() {
        $sql = "SELECT Nome FROM tb_aluno WHERE Nome LIKE :nome";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":nome", "%" . $this->aluno->getNome() . "%");
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

}
