<?php
include_once("../components/conf/conf_mensaje.php");
if(isset($_GET['id'])){
    $id=htmlspecialchars($_GET['id']);
    $consulta="DELETE FROM `mensaje` WHERE `id_mensaje`=$id";
    mysqli_query($con_mensaje,$consulta);
    header("Location:../admin/items.php?men=ok");
}

?>