<?php
/*Peticion a pagina para consultar nombre de archivo y texto*/
$nombreArchivo = $_REQUEST['nombreArchivo'];
$textoArchivo = $_REQUEST['mytextarea'];


/*Esctructura básica de cualquier archivo*/
$estructuraInicio = 
'<?php include ("../includes/header.php"); ?>';

$estructuraFin = '<?php include ("../includes/footer.php");?>';

echo $textoArchivo;

/**
 * formar estructura, de esta variable sera la final 
 * para producir el texto del nuevo archivo
 */
$estructura = $estructuraInicio . $textoArchivo .$estructuraFin;


/*Creacion y escritura del archivo*/
$archivo = fopen ($nombreArchivo .".php", "a") or die 
                ("ocurrió un error al crear el archivo");

fwrite ($archivo, $estructura);
fwrite ($archivo, "\n");

$nombreArchivo = $nombreArchivo . ".php";
header ("Location: $nombreArchivo");
?>