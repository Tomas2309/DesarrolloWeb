<?php

include_once("../components/conf/conf.php");
$nombre;
$apellido;
$documento;
$telefono;
$correo;
$codigo;

if (isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['correo']) and isset($_POST['documento']) and isset($_POST['telefono']) and isset($_POST['codigo'])){
    $nombre=htmlspecialchars($_POST['nombre']);
    $apellido=htmlspecialchars($_POST['apellido']);
    $documento=htmlspecialchars($_POST['documento']);
    $telefono=htmlspecialchars($_POST['telefono']);
    $correo=htmlspecialchars($_POST['correo']);
    $clave=htmlspecialchars($_POST['clave']);
    $codigo=htmlspecialchars($_POST['codigo']);
}
if (($nombre==NULL) and ($apellido==NULL) and ($documento==NULL) and ($telefono==NULL) and ($correo==NULL) and ($codigo==NULL) and ($clave==NULL)){        
    header("Location:../pages/registro.php?error=ok");
}else{
    $consulta="SELECT * FROM `departamentos` WHERE `codigo`='$codigo'";
    $respuesta=mysqli_query($con,$consulta);
    if($respuesta==NULL){
        header("Location:../pages/registro.php?code=no");
    }
    else{
        if($fila=mysqli_fetch_array($respuesta)){
            $consulta3="INSERT INTO `usuarios`(`correo`, `clave`, `fk_rol`) VALUES ('$correo',MD5('$clave'),'2')";
            mysqli_query($con,$consulta3);
            
            $consulta4="SELECT `id_usuarios` FROM `usuarios` WHERE `correo`='$correo'";
            $respuesta2=mysqli_query($con,$consulta4);
            if ($fila5=mysqli_fetch_array($respuesta2)){
                $id_respuesta=$fila5['id_usuarios'];
            }

            $consulta2="INSERT INTO `inquilinos`(`nombre`, `apellido`, `documento`, `telefono`, `correo`, `clave`,`fk_depto`, `fk_alquiler`, `fk_usuario`) VALUES ('$nombre','$apellido','$documento','$telefono','$correo',MD5('$clave'),'$fila[id_depto]',1,$id_respuesta)";
            mysqli_query($con,$consulta2);
            header("Location:../inquilino/index.php?name=$nombre&&surname=$apellido&&mail=$correo&&depto=$fila[id_depto]&&alquiler=1&&users=$id_respuesta");
        }
    }
}

?>