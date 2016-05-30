hola3
<?php



require 'Meta.php';

    echo "aqui ya va a calidar";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    echo "aqui entra";
    // Manejar petición GET
    $complejos  = Meta::getAll();

    echo "aqui ya trajo";
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
}else{
    echo "la peticion no es get";
}

?>