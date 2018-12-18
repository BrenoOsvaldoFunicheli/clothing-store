<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductModel
 *
 * @author osval
 */
class ProductModel {

    //put your code here

    private $id;
    private $id_categoria;
    private $nome;
    private $descricao;
    private $cor;
    private $material;
    private $valor;
    private $lavagem;

    function __construct($id = '', $id_categoria = '', $nome = '', $descricao = '', $cor = '', $material = '', $valor = '', $lavagem = '') {
        $this->id = $id;
        $this->id_categoria = $id_categoria;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->cor = $cor;
        $this->material = $material;
        $this->valor = $valor;
        $this->lavagem = $lavagem;
    }

    function getId() {
        return $this->id;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCor() {
        return $this->cor;
    }

    function getMaterial() {
        return $this->material;
    }

    function getValor() {
        return $this->valor;
    }

    function getLavagem() {
        return $this->lavagem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setLavagem($lavagem) {
        $this->lavagem = $lavagem;
    }

}
