<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$representante_legal = $_POST['representante_legal'];
$nit = $_POST['nit'];
$categoria_empresa = $_POST['categoria_empresa'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];

$consulta = $conn->query("SELECT * FROM empresa WHERE nit='$nit'");

if ($consulta->num_rows > 0) {
    echo "<script>alert('El NIT ya está registrado.')</script>";

} else {
    $sql = "INSERT INTO empresa (nombre, representante_legal, nit, categoria_empresa, telefono, correo, direccion) 
    VALUES ('$nombre', '$representante_legal', '$nit', '$categoria_empresa', '$telefono', '$correo', '$direccion')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro guardado exitosamente.')</script>";
    } else {
        echo "<script>alert('Error al guardar el registro: " . $conn->error . "')</script>";
    }
}
