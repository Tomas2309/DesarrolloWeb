<?php 
session_start();
include_once("../components/conf/conf.php");
$correo;
$clave;

if(isset($_POST['correo']) and isset($_POST['clave'])){
    $correo=htmlspecialchars($_POST['correo']);
    $clave=htmlspecialchars($_POST['clave']);
    $consulta="SELECT * FROM `usuarios` WHERE `correo`='$correo' AND `clave`=MD5('$clave')";
    $respuesta=mysqli_query($con,$consulta);

    if($fila=mysqli_fetch_array($respuesta)){
        if ($fila['fk_rol']==1){
            $_SESSION=$fila;
            header("Location:../admin/index.php?user=$fila[id_usuarios]");

        }
        else if($fila['fk_rol']==2){
            $_SESSION=$fila;
            header("Location:../inquilino/index.php?user=$fila[id_usuarios]");
        }
    }
    else{
        header("Location:../pages/login.php?log=no");
    }
}




?>
