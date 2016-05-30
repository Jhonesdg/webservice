hola
<?php



require 'Meta.php';
/**
 * Obtiene todas las metas de la base de datos
 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    $complejos  = Meta::getAll();
    print $complejos;

    if ($complejos) {

       
        $datos  = $complejos;

        print json_encode($datos);
    } else {
        print json_encode(array("mensaje" => "Ha ocurrido un error"
        ));
    }
}
/*
?>