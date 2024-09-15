<?php
require_once('conexion.php');
require_once('cors.php');
require_once('controller.php');

$methodHTTP = $_SERVER['REQUEST_METHOD'];

switch ($methodHTTP) {
    case 'GET' :
        $ctl = new Controller();
        $data = $ctl->getUsuarios();
        echo json_encode(["usuarios" => $data]);
        break;
    
    default:
    #code...
    break;
}