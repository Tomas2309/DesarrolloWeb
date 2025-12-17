<?php
include_once("../components/conf/conf_mensaje.php");
$nombre;
$apellido;
$correo;
$telefono;
$mensaje;

if (isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['correo']) and isset($_POST['telefono']) and isset($_POST['texto'])){
    $nombre=htmlspecialchars($_POST['nombre']);
    $apellido=htmlspecialchars($_POST['apellido']);
    $correo=htmlspecialchars($_POST['correo']);
    $telefono=htmlspecialchars($_POST['telefono']);
    $mensaje=htmlspecialchars($_POST['texto']);
}
if ($mensaje==NULL){
    header("Location:../pages/contacto.php?txt=no");
}else if(($nombre==NULL)and($apellido==NULL)){
    header("Location:../pages/contacto.php?nom=no");
}else if(($correo==NULL)and($telefono==NULL)){
    header("Location:../pages/contacto.php?con=no");
}else{
    $consulta="INSERT INTO `mensaje`(`nombre`, `apellido`, `correo`, `telefono`, `texto`, `fecha`) VALUES ('$nombre','$apellido','$correo','$telefono','$mensaje',NOW())";
    mysqli_query($con_mensaje,$consulta);
    header("Location:../pages/contacto.php?mensaje=ok");
}
?>