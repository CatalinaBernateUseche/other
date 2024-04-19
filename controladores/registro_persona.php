<?php
// paso1: importar la libreria de la BD
include "../config/conexion.php";


//paso2: almacenar las variables
$nombre = $_POST["nombre"];
$programa = $_POST["programa"];
$cedula = $_POST["documento"];


//paso3: armar el squl en una variable

$sql_insertar = "INSERT INTO preinscripcion( nombre, programa, documento, fecha_sys) VALUES ('".$nombre."','".$programa."','".$cedula."',now())";


//paso4: enviar a la BD

if($bdh->query($sql_insertar))
{
    echo "LA INFORMACION FUE CORRECTAMENTE REGISTRADA";
}
{
    echo "ERRO REGISTRANDO EN LA INFORMACION";
}

?>