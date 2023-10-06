<?php

    $conexion = new mysqli ("localhost","root","","tbhistorietas"); 
    if($conexion){
        echo "conexion exitosa";
    }else{
        echo "fallo la conexion"; 
    }
?>