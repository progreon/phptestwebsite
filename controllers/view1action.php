<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'myphpaction.php';

/**
 * Description of view1action
 *
 * @author Marco
 */
class View1Action extends MyPHPAction {
    
    private $view;
    
    public function __construct() {
        $this->view = Controller::VIEWS_FOLDER . 'view1.php';
    }
    
    public function execute() {
        $_REQUEST['view'] = $this->view;
    }

}
