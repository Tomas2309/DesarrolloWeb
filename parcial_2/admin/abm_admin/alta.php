<?php
include_once("../../components/conf/conf.php");
$calle;
$altura;
$piso;
$unidad;
$barrio;
$localidad;
$estado;
$codigo;
if(isset($_POST['calle'])and isset($_POST['altura'])and isset($_POST['piso'])and isset($_POST['unidad']) and isset($_POST['barrio'])and isset($_POST['localidad'])and isset($_POST['estado'])and isset($_POST['codigo'])){
    $calle=htmlspecialchars($_POST['calle']);
    $altura=htmlspecialchars($_POST['altura']);
    $piso=htmlspecialchars($_POST['piso']);
    $unidad=htmlspecialchars($_POST['unidad']);
    $barrio=htmlspecialchars($_POST['barrio']);
    $localidad=htmlspecialchars($_POST['localidad']);
    $estado=htmlspecialchars($_POST['estado']);
    $codigo=htmlspecialchars($_POST['codigo']);

    $consulta="INSERT INTO `departamentos`(`calle`, `altura`, `piso`, `unidad`, `barrio`, `localidad`, `estado`, `codigo`) VALUES ('$calle','$altura','$piso','$unidad','$barrio','$localidad','$estado','$codigo')";

    mysqli_query($con,$consulta);
    header("Location:../items.php?depto=cargado");
}

include_once("../../components/conf/conf.php");
if(isset($_POST['nombre'])and isset($_POST['apellido'])and isset($_POST['documento'])and isset($_POST['telefono']) and isset($_POST['inmobiliaria'])){
    $nombre=htmlspecialchars($_POST['nombre']);
    $apellido=htmlspecialchars($_POST['apellido']);
    $documento=htmlspecialchars($_POST['documento']);
    $telefono=htmlspecialchars($_POST['telefono']);
    $inmobiliaria=htmlspecialchars($_POST['inmobiliaria']);

    $consulta="INSERT INTO `agentes`(`nombre`, `apellido`, `documento`, `telefono`, `inmobiliaria`) VALUES ('$nombre','$apellido','$documento','$telefono','$inmobiliaria')";

    mysqli_query($con,$consulta);
    header("Location:../items.php?adm=cargado");
}


?>