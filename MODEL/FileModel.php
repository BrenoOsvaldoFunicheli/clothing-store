<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArquivoModel
 *
 * @author osval
 */
class FileModel {
    //put your code heres
    
    private $id_arquivo;
    private $id_produto;
    private $id_conteudo;
    private $id_nome;
    private $id_tipo;
    private $id_titulo;
    
    function __construct($id_arquivo, $id_produto, $id_conteudo, $id_nome, $id_tipo, $id_titulo) {
        $this->id_arquivo = $id_arquivo;
        $this->id_produto = $id_produto;
        $this->id_conteudo = $id_conteudo;
        $this->id_nome = $id_nome;
        $this->id_tipo = $id_tipo;
        $this->id_titulo = $id_titulo;
    }

    function getId_arquivo() {
        return $this->id_arquivo;
    }

    function getId_produto() {
        return $this->id_produto;
    }

    function getId_conteudo() {
        return $this->id_conteudo;
    }

    function getId_nome() {
        return $this->id_nome;
    }

    function getId_tipo() {
        return $this->id_tipo;
    }

    function getId_titulo() {
        return $this->id_titulo;
    }

    function setId_arquivo($id_arquivo) {
        $this->id_arquivo = $id_arquivo;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setId_conteudo($id_conteudo) {
        $this->id_conteudo = $id_conteudo;
    }

    function setId_nome($id_nome) {
        $this->id_nome = $id_nome;
    }

    function setId_tipo($id_tipo) {
        $this->id_tipo = $id_tipo;
    }

    function setId_titulo($id_titulo) {
        $this->id_titulo = $id_titulo;
    }

}
