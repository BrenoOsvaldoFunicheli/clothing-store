<?php

include_once 'Connection.php';

class ImgDAO {

    private $db;

    function __construct() {

        $con = new Connection();
        $this->db = $con->getConnection();
    }

    public function update($nome, $id_pro, $titulo, $conteudo, $tipo) {
        $sql ="UPDATE `tb_arquivos` SET `arquivo_nome`='$nome',`arquivo_titulo`='$titulo',`arquivo_conteudo`='$conteudo',`arquivo_tipo`='$tipo' WHERE `id_produto`='$id_pro'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array());
    }
    
    public function insert($nome, $id_pro, $titulo, $conteudo, $tipo) {
        $sql = "INSERT INTO `tb_arquivos`(`arquivo_id`, `id_produto`, `arquivo_nome`, `arquivo_titulo`, `arquivo_conteudo`, `arquivo_tipo`)"
                . " VALUES ('0','$id_pro','$nome','$titulo','$conteudo','$tipo')";
//        $sql = "INSERT INTO `tb_arquivos` VALUES('0',$id_pro','$nome','$titulo','$conteudo','$tipo')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array());
    }

    public function getRecent() {
        $sql = "SELECT * FROM tb_arquivos ORDER BY arquivo_id DESC LIMIT 6";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array());
    }
    
    public function search($nome, $id_pro, $titulo, $conteudo, $tipo) {
        $sql = "SELECT * FROM tb_arquivos";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array());
    }

    public function findById($id) {
        $sql = "SELECT arquivo_tipo, arquivo_conteudo FROM tb_arquivos WHERE id_produto=$id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array());
        return $stmt;
    }

    public function delete($id) {
        $sql = "DELETE FROM tb_arquivos"
                . " WHERE id_produto= :id";

        $stmt = $this->db->prepare($sql);
        $values1 = $id;

        $stmt->bindParam(':id', $values1);

        $stmt->execute();
    }

}
