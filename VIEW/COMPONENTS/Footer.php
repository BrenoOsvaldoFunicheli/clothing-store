<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Footer
 *
 * @author osval
 */
class Footer {

    //put your code here
    public static function getGeneralFooter() {
        ?>
        <footer class = "py-5 bg-dark">
            <div class = "container">
                <p class = "m-0 text-center text-white" >  Copyright &copy Estampaty</p>
            </div>
            <!--/.container -->
        </footer>
        <?php
    }

    public static function getMainFooter() {
        ?>
        <footer class="bg-black small text-center text-white-50">
            <div class="container">
                Copyright &copy Estampaty
            </div>
        </footer>
        <?php
    }

}
