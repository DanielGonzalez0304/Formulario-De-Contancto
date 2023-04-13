<?php
    	 include("abre.php");
        $Nombre   =$_POST['Nombre'];
        $Apellidos   =$_POST['Apellidos'];
        $Calle   =$_POST['Calle'];
        $Telefono   =$_POST['Telefono'];

    $consulta = "INSERT INTO  contacto(Nombre,Apellidos,Calle,Telefono) VALUES
     ('$Nombre', '$Apellidos','$Calle', '$Telefono')";


        if ($conexion->query($consulta) === TRUE){
            header("Location: index.html"); 
        }
        else{
            echo "Error:" . $consulta . "<br>" . $conexion->error;
        }
        $conexion->close();
   ?>     
