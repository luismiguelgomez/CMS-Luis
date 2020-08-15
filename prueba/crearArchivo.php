<?php

$nombreArchivo = $_REQUEST['nombreArchivo'];
$textoArchivo = $_REQUEST['textoArchivo'];

$archivo = fopen ($nombreArchivo .".php", "a") or die 
                ("ocurrió un error al crear el archivo");

fwrite ($archivo, $textoArchivo);
fwrite ($archivo, "\n");


?>