<?php
    require("../../Globales/php/conexion.php");
    session_start();
    $usu=$_POST['usu_login'];
    $contra=$_POST['contra_login'];
    $sqlLogin="select id_usuario, nivel from usuarios where usuario='".$usu."' && contra='".$contra."'";
    $resLogin=mysqli_query($mysqli,$sqlLogin);
    while($fila=mysqli_fetch_array($resLogin)){
        $id=$fila[0];
        $nivel=$fila[1];
    }
    if(isset($id)!=0 && $id!=null){
        echo "hola :d";
        $_SESSION['nivel_usu']=$nivel;
        header("Location: ../../index/index.php");
    }else{
        echo "Adios :c";
    }
?>
