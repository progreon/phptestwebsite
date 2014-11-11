<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'myphpaction.php';

/**
 * Description of defaultaction
 *
 * @author Marco
 */
class DefaultAction extends MyPHPAction {
    
    public function execute() {
        $_REQUEST['view'] = Controller::VIEWS_FOLDER . $_GET['p'] . '.php';
    }
    
}
