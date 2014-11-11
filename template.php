<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/**
 * Debugging
 */
//ini_set('display_errors', 'On');
//error_reporting(E_ALL);
$view = ROOT . $_REQUEST['view'];
if (!$view) {
    http_response_code(404);
    $view = ROOT . 'pages/404.php';
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>template</title>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <?php include $view; ?>
        <?php include 'footer.php'; ?>
    </body>
</html>
