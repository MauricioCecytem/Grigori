<?php
    require("../../Globales/php/conexion.php");
    $usu=$_POST['usu_registro'];
    $contra=$_POST['contra_registro'];
    $sqlRegistrar="insert into usuarios (usuario,contra,nivel) values ('".$usu."','".$contra."',3)";
    $resRegistro=mysqli_query($mysqli,$sqlRegistrar);
    if(!$resRegistro){
        echo "Oh no... :c";
    }else{
        header("Location: ../../Login/index.php");
    }
?>
