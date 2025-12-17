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
$id;
if(isset($_POST['calle'])and isset($_POST['altura'])and isset($_POST['piso'])and isset($_POST['unidad']) and isset($_POST['barrio'])and isset($_POST['localidad'])and isset($_POST['estado'])and isset($_POST['codigo'])and isset($_POST['id_mod'])){
    $calle=htmlspecialchars($_POST['calle']);
    $altura=htmlspecialchars($_POST['altura']);
    $piso=htmlspecialchars($_POST['piso']);
    $unidad=htmlspecialchars($_POST['unidad']);
    $barrio=htmlspecialchars($_POST['barrio']);
    $localidad=htmlspecialchars($_POST['localidad']);
    $estado=htmlspecialchars($_POST['estado']);
    $codigo=htmlspecialchars($_POST['codigo']);
    $id=htmlspecialchars($_POST['id_mod']);

    $consulta="UPDATE `departamentos` SET `calle`='$calle',`altura`='$altura',`piso`='$piso',`unidad`='$unidad',`barrio`='$barrio',`localidad`='$localidad',`estado`='estado',`codigo`='$codigo' WHERE `id_depto`='$id'";

    mysqli_query($con,$consulta);
    header("Location:../items.php?depto=modificado");
}
if(isset($_POST['correo']) and isset($_POST['clave']) and isset($_POST['fk_usuario'])and isset($_POST['id_agen'])){
    $correo=htmlspecialchars($_POST['correo']);
    $clave=htmlspecialchars($_POST['clave']);
    $fk_usuario=htmlspecialchars($_POST['fk_usuario']);
    $id_agen=($_POST['id_agen']);
    if($fk_usuario==0){
        $consulta="INSERT INTO `usuarios`(`correo`, `clave`, `fk_rol`) VALUES ('$correo',MD5('$clave'),1)";
        $consulta1="SELECT `id_usuarios` FROM `usuarios` WHERE `correo`='$correo'";
        mysqli_query($con,$consulta);
        $respuesta=mysqli_query($con,$consulta1);
        if($fila=mysqli_fetch_array($respuesta)){
            $fk=$fila['id_usuarios'];
            $consulta2="UPDATE `agentes` SET `fk_usuario`='$fk' WHERE `id_agente`='$id_agen'";
            mysqli_query($con,$consulta2);
        }

        
    }else{
        $consulta="UPDATE `usuarios` SET `correo`='$correo',`clave`=MD5('$clave'),`fk_rol`='1' WHERE `id_usuarios`= $fk_usuario";
        mysqli_query($con,$consulta);
    }
    header("Location:../items.php?adm=modificado");
}
if(isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['documento']) and isset($_POST['telefono']) and isset($_POST['inmobiliaria'])and isset($_POST['id_agente'])){
    $nombre=htmlspecialchars($_POST['nombre']);
    $apellido=htmlspecialchars($_POST['apellido']);
    $documento=htmlspecialchars($_POST['documento']);
    $telefono=htmlspecialchars($_POST['telefono']);
    $inmobiliaria=htmlspecialchars($_POST['inmobiliaria']);
    $id_agente=htmlspecialchars($_POST['id_agente']);


    print"$nombre - $apellido - $documento - $telefono - $inmobiliaria - $id_agente";

    $consulta="UPDATE `agentes` SET `nombre`='$nombre',`apellido`='$apellido',`documento`='$documento',`telefono`='$telefono',`inmobiliaria`='$inmobiliaria' WHERE `id_agente`='$id_agente'";

    mysqli_query($con,$consulta);
    header("Location:../items.php?adm=modificado");
}
?>