<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MensagemModel
 *
 * @author osval
 */
class MessegerModel {
    //put your code here
    private $id;
    private $id_imagem;
    private $nome;
    private $assunto;
    private $email;
    private $telefone;
    private $mensagem;

    function __construct($id, $id_imagem, $nome, $assunto, $email, $telefone, $mensagem) {
        $this->id = $id;
        $this->id_imagem = $id_imagem;
        $this->nome = $nome;
        $this->assunto = $assunto;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->mensagem = $mensagem;
    }

    function getId() {
        return $this->id;
    }

    function getId_imagem() {
        return $this->id_imagem;
    }

    function getNome() {
        return $this->nome;
    }

    function getAssunto() {
        return $this->assunto;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_imagem($id_imagem) {
        $this->id_imagem = $id_imagem;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }


    
}
