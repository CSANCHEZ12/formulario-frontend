<?php
$host="formulario-movil.rf.gd";
$usuario="if0_38841725";
$basedatos="if0_38841725_db_formulario";
$password="CASALLASANCHEZ";

// conexion 
$conn=mysqli_connect($host,$usuario,$password,$basedatos);
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Conexion exitosa<br>";
}
