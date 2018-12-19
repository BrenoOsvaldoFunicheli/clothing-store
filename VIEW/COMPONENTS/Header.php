<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Header
 *
 * @author osval
 */
class Header {

    //put your code here

    public static function getGeneralHeader() {
        include_once '../VIEW/MODAL/ModalContato.php';
        ModalCadastro::createModalLogin('CONTROLLER/ClientController.php');
        ?>
        <nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.php">Estampaty</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="../index.php">Voltar</a>
                        </li> <li class="nav-item">
                            <?php
                            if (!(isset($_SESSION))) {
                                session_start();
                                $_SESSION['uCod'] = '0';
                                $cod_user = $_SESSION['uCod'];
                            } else {
                                $cod_user = $_SESSION['uCod'];
                            }
                            if ($cod_user != '0') {
//                                include_once '../CONTROLLER/ClientController.php';
//                                ClientController::getClient($cod_user);
                                ?>
                                <a class="nav-link js-scroll-trigger" href="">Minha Conta</a>
                                <?php
                            } else {
                                ?>
                                <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#login">Cliente</a>        
                                <?php
                            }
                            ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" class="btn " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }

    public static function getMainHeader() {
        include_once 'VIEW/MODAL/ModalContato.php';
        ModalCadastro::createModalLogin('CONTROLLER/ClientController.php');
        ?>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Estampaty</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <?php
                            if (!(isset($_SESSION))) {
                                session_start();
                                $cod_user = $_SESSION['uCod'];
                            } else {
                                $_SESSION['uCod'] = '0';
                                $cod_user = $_SESSION['uCod'];
                            }
                            if ($cod_user != '0') {
//                                include_once '../CONTROLLER/ClientController.php';
//                                ClientController::getClient($cod_user);
                                ?>
                                <a class="nav-link js-scroll-trigger" href="">Minha Conta</a>
                                <?php
                            } else {
                                ?>
                                <!--<button type="button" class="btn btn-primary" >Large modal</button>-->
                                <a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#login">Cliente</a>        
            <?php
        }
        ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="VIEW/PageProducts.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">Plataforma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#projects">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#signup">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
    }

}
