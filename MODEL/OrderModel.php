<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PedidoModel
 *
 * @author osval
 */
class OrderModel {
    //put your code here
    private $id_pedido;
    private $id_produto;
    private $nome_user;
    private $email;
    private $tamanho;
    private $quantidade;
    private $situacao;
    private $cor;
    private $telefone;
    private $data;
    
    function __construct($id_pedido, $id_produto, $nome_user, $email, $tamanho, $quantidade, $situacao, $cor, $telefone, $data) {
        $this->id_pedido = $id_pedido;
        $this->id_produto = $id_produto;
        $this->nome_user = $nome_user;
        $this->email = $email;
        $this->tamanho = $tamanho;
        $this->quantidade = $quantidade;
        $this->situacao = $situacao;
        $this->cor = $cor;
        $this->telefone = $telefone;
        $this->data = $data;
    }

    function getId_pedido() {
        return $this->id_pedido;
    }

    function getId_produto() {
        return $this->id_produto;
    }

    function getNome_user() {
        return $this->nome_user;
    }

    function getEmail() {
        return $this->email;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getQuantidade() {
        return $this->quantidade;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function getCor() {
        return $this->cor;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getData() {
        return $this->data;
    }

    function setId_pedido($id_pedido) {
        $this->id_pedido = $id_pedido;
    }

    function setId_produto($id_produto) {
        $this->id_produto = $id_produto;
    }

    function setNome_user($nome_user) {
        $this->nome_user = $nome_user;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setData($data) {
        $this->data = $data;
    }


}
