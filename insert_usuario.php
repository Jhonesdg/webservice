<?php
/**
 * Obtiene todas las metas de la base de datos
 */

require 'Meta.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    if (isset($_GET['fecha_reserva']))
    {

    }
    $canchas = Meta::insertusuario($_GET['email'],$_GET['pass'],$_GET['nombre'],$_GET['apellido'],$_GET['telefono']);

    if ($canchas) {
        
        $datos  = $canchas;

        print json_encode(array("mensaje" => "insercion exitosa"));
    } else {
        print json_encode(array(   "mensaje" => "Ha ocurrido un error"));
    }
}