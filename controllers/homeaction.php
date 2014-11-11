<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'myphpaction.php';

/**
 * Description of homeaction
 *
 * @author Marco
 */
class HomeAction extends MyPHPAction {
    
    private $view;
    
    public function __construct() {
        $this->view = Controller::VIEWS_FOLDER . 'home.php';
    }
    
    public function execute() {
        $_REQUEST['view'] = $this->view;
    }

}
