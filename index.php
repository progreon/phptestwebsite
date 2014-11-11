<!--<!DOCTYPE html>-->
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>-->
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
require 'controllers/controller.php';
//echo $_GET['url'];
//foreach ($_GET as $key => $val) {
//    echo $key . " => " . $val . "<br>";
//}
$controller = new Controller();
$controller->handle_request();
//echo $_REQUEST['view']
//echo $controller->get_view();
//require 'template.php';
?>
<!--    </body>
</html>-->
