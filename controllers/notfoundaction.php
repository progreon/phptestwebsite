<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'myphpaction.php';

/**
 * Description of notfoundaction
 *
 * @author Marco
 */
class NotFoundAction extends MyPHPAction {
    
    public function execute() {
        http_response_code(404);
        $_REQUEST['view'] = Controller::VIEWS_FOLDER . '404.php';
    }

}
