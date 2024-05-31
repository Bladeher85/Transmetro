<?php
        include_once 'conexiondb.php';




         //  Recibo los datos del index para el registroViaje.php
        

               

         //  Actualiza datos del perfil del usuario
         if (isset($_POST['btn_perfildata'])) {
                
                $Id_esta = $_POST['Id_estacion'];
                $nombreU = $_POST['Nombre'];
                $direccionU = $_POST['Ubicacion'];
                $LineaU = $_POST['Linea_fk'];

                $sql = "UPDATE estacion SET  nombre='$nombreU', ubicacion='$direccionU', linea_fk='$LineaU' 
                        WHERE id_estacion = '$Id_esta' ";
                $consulta =  mysqli_query($conexion, $sql);

               
        }


        

        //  Ingresa el nuevo usuario administador
        if (isset($_POST['btn_admin'])) {
                
                
                $IdEsta = $_POST['Id_estacion'];
                $nombreE = $_POST['Nombre'];
                $Ubicacion = $_POST['Ubicacion'];
                $Linea = $_POST['Linea_fk'];


                $sql = "INSERT INTO estacion (id_estacion, nombre , ubicacion, linea_fk)
                values('$IdEsta','$nombreE','$Ubicacion','$Linea')";
                $consulta =  mysqli_query($conexion, $sql);
                
                if ($sql) {
                    header('Location: registrarAdmin.php');
             }
                
                 }

        

    // Borrar Usuario administrador
    if (isset($_POST['delete_btn'])) {

        $id = $_POST['delete_id'];

        $sql =  "DELETE FROM estacion WHERE Id_estacion='$id' ";
        $consulta =  mysqli_query($conexion, $sql);

        if ($sql ) {
            header('Location: registrarAdmin.php');
        }
        else {
            header('Location: codigo.php');
        }

    }#

    // Actualizar los datos del usuario administrador
    if (isset($_POST['updatebtnAdmin'])) {

        $Id_esta = $_POST['Id_estacion'];
        $username = $_POST['Nombre'];
        $ubica = $_POST['Ubicacion'];
        $cedula = $_POST['Linea_fk'];
       
 
        $query =  "UPDATE estacion SET nombre ='$username', ubicacion ='$ubica', linea_fk ='$cedula'  WHERE id_estacion ='$Id_esta'  ";
        $query_run = mysqli_query($conexion, $query);

        if ($query_run ) {
            $_SESSION['success'] = "Your Data is udpate";
            header('Location: registrarAdmin.php');
        }
        else {
           $_SESSION['status'] = "Your Data is not udpate";
            header('Location: codigo.php');
        }
    }

    
        //  Actualiza datos del perfil del piloto
        if (isset($_POST['btn_perfildata1'])) {
                
            $Id_esta = $_POST['Id_piloto'];
            $nombreU = $_POST['Nombre'];
            $direccionU = $_POST['Direccion'];
            $LineaU = $_POST['Historial_edu'];
            $TelU = $_POST['Telefono'];

            $sql = "UPDATE piloto SET  nombre='$nombreU', direccion='$direccionU', historial_edu='$LineaU', telefono='$TelU'  
                    WHERE id_piloto = '$Id_esta' ";
            $consulta =  mysqli_query($conexion, $sql);

           
    }


    

    //  Ingresa el nuevo piloto
    if (isset($_POST['btn_admin1'])) {
            
            
           $Id_esta = $_POST['Id_piloto'];
            $nombreE = $_POST['Nombre'];
            $direccionE = $_POST['Direccion'];
            $LineaE = $_POST['Historial_edu'];
            $TelE = $_POST['Telefono'];


            $sql = "INSERT INTO piloto (id_piloto, nombre, historial_edu, direccion, telefono)
            values('$Id_esta','$nombreE','$direccionE','$LineaE','$TelE')";
            $consulta =  mysqli_query($conexion, $sql);
            
            if ($sql) {
                header('Location: registrarAdminp.php');
         }
            
             }

    

// Borrar Usuario piloto
if (isset($_POST['delete_btn1'])) {

    $id = $_POST['delete_id1'];

    $sql =  "DELETE FROM piloto WHERE Id_piloto='$id' ";
    $consulta =  mysqli_query($conexion, $sql);

    if ($sql ) {
        header('Location: registrarAdminp.php');
    }
    else {
        header('Location: codigo.php');
    }

}#

// Actualizar los datos del piloto
if (isset($_POST['updatebtnAdmin1'])) {

    $Id_esta = $_POST['Id_piloto'];
    $username = $_POST['Nombre'];
    $ubica = $_POST['Direccion'];
    $cedula = $_POST['Historial_edu'];
    $tel = $_POST['Telefono'];
   

    $query =  "UPDATE piloto SET nombre ='$username', direccion ='$ubica', historial_edu ='$cedula', telefono ='$tel'  WHERE id_piloto ='$Id_esta' ";
    $query_run = mysqli_query($conexion, $query);

    if ($query_run ) {
        $_SESSION['success'] = "Your Data is udpate";
        header('Location: registrarAdminp.php');
    }
    else {
       $_SESSION['status'] = "Your Data is not udpate";
        header('Location: codigo.php');
    }
}
   

//  Actualiza datos del perfil de muni
if (isset($_POST['btn_perfildata2'])) {
                
    $Id_esta = $_POST['Id_muni'];
    $nombreU = $_POST['Nombre'];
    $direccionU = $_POST['Ubicacion'];
    $LineaU = $_POST['Estacion_fk'];

    $sql = "UPDATE municipalidad SET  estacion_fk='$LineaU', nombre='$nombreU', ubicacion='$direccionU' 
            WHERE id_muni = '$Id_esta' ";
    $consulta =  mysqli_query($conexion, $sql);

   
}




//  Ingresa nueva muni
if (isset($_POST['btn_admin2'])) {
    
    
    $IdEsta = $_POST['Id_muni'];
    $nombreE = $_POST['Nombre'];
    $Ubicacion = $_POST['Ubicacion'];
    $Linea = $_POST['Estacion_fk'];


    $sql = "INSERT INTO municipalidad (id_muni, estacion_fk, nombre , ubicacion)
    values('$IdEsta', '$Linea' ,'$nombreE','$Ubicacion')";
    $consulta =  mysqli_query($conexion, $sql);
    
    if ($sql) {
        header('Location: registrarAdminm.php');
 }
    
     }



// Borrar muni
if (isset($_POST['delete_btn2'])) {

$id = $_POST['delete_id2'];

$sql =  "DELETE FROM municipalidad WHERE Id_muni='$id' ";
$consulta =  mysqli_query($conexion, $sql);

if ($sql ) {
header('Location: registrarAdminm.php');
}
else {
header('Location: codigo.php');
}

}#

// Actualizar los datos de muni
if (isset($_POST['updatebtnAdmin2'])) {

$Id_esta = $_POST['Id_muni'];
$username = $_POST['Nombre'];
$ubica = $_POST['Ubicacion'];
$cedula = $_POST['Estacion_fk'];


$query =  "UPDATE municipalidad SET  estacion_fk ='$cedula' , nombre ='$username', ubicacion ='$ubica'  WHERE id_muni ='$Id_esta' ";
$query_run = mysqli_query($conexion, $query);

if ($query_run ) {
$_SESSION['success'] = "Your Data is udpate";
header('Location: registrarAdminm.php');
}
else {
$_SESSION['status'] = "Your Data is not udpate";
header('Location: codigo.php');
}
}

?>