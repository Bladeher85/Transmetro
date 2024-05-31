<?php
include_once 'conexiondb.php';

$usuario = isset($_POST["email"]) ? trim($_POST["email"]) : null;
$pass = isset($_POST["password"]) ? md5(trim($_POST["password"])) : null;

if ($usuario)
{
    $sql = "SELECT * FROM usuario WHERE Correo = '$usuario' and Contrasenia = '$pass'";
    $query_run = mysqli_query($conexion, $sql);
    $existe = isset($query_run->num_rows) ? $query_run->num_rows : 0;
    if (!$existe)
    {
        header('Location: login.php?mensaje=Usuario no existe');
    }else{
        header('Location: estacion1.php?mensaje=Bienvenido '.$usuario);
    }
}


/*$query =  "UPDATE municipalidad SET  estacion_fk ='$cedula' , nombre ='$username', ubicacion ='$ubica'  WHERE id_muni ='$Id_esta' ";
$query_run = mysqli_query($conexion, $query);*/

?>