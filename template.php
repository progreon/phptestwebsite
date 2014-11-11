<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $view = $_REQUEST['view'];
    if (!$view) {
        http_response_code(404);
        $view = '404.php';
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>template</title>
    </head>
    <body>
        <?php if ($view) { ?>
        <?php include 'header.php'; ?>
        <?php include $view; ?>
        <?php include 'footer.php'; ?>
        <?php } else { ?>
        There is no view!
        <?php } ?>
    </body>
</html>
