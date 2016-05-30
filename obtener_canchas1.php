hola2
<?php



require 'Meta.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // Manejar petición GET
    $complejos  = Meta::getAll();
    echo $complejos;
    echo "aqui ya deberia imprimir";
/**
 * Obtiene todas las metas de la base de datos
 
    if ($complejos) {

       
        $datos  = $complejos;

        print json_encode($datos);
    } else {
        print json_encode(array("mensaje" => "Ha ocurrido un error"
        ));
    }
*/
}

?>