<?php
include_once("../../components/conf/conf.php");
if(isset($_GET['id_depto'])){

    $id=htmlspecialchars($_GET['id_depto']);

    $consulta="DELETE FROM `departamentos` WHERE `id_depto`='$id'";

    mysqli_query($con,$consulta);
    header("Location:../items.php?depto=out");
}
if(isset($_GET['id_agente'])and isset($_GET['fk_usuario'])){

    $id=htmlspecialchars($_GET['id_agente']);
    $fk=htmlspecialchars($_GET['fk_usuario']);
    $consulta="DELETE FROM `agentes` WHERE `id_agente`='$id'";
    $consulta2="DELETE FROM `usuarios` WHERE `id_usuarios`='$fk'";

    mysqli_query($con,$consulta);
    mysqli_query($con,$consulta2);
    header("Location:../items.php?adm=elim");
}
?>