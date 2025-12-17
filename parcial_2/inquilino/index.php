<?php 
session_start();
$pagina="logueado";
$usuario="normal";
include_once("../components/header.php");

?>

<main class="main">
    <h1>Sistema de Gestion de Alquiler</h1>
    <?php
        if($_SESSION==NULL){
            header("Location:../index.php");
        }
        include_once("../components/conf/conf.php");
        $nombre;
        $apellido;
        $correo;
        $depto;
        $alquiler;
        $user;

        if (isset($_GET['name']) and ($_GET['surname']) and ($_GET['mail']) and ($_GET['depto']) and ($_GET['alquiler']) and ($_GET['users'])){
            $nombre=htmlspecialchars($_GET['name']);
            $apellido=htmlspecialchars($_GET['surname']);
            $correo=htmlspecialchars($_GET['mail']);
            $depto=htmlspecialchars($_GET['depto']);
            $alquiler=htmlspecialchars($_GET['alquiler']);
            $user=htmlspecialchars($_GET['user']);
            print"
            <section>
                <h2>Bienvenido $nombre $apellido</h2>
                <p>Mail: $correo</p>
            </section>";
        }
        else if (isset($_GET['user'])){
            $id=htmlspecialchars($_GET['user']);
            $consulta="SELECT * FROM `inquilinos` WHERE `fk_usuario`=$id";
            $respuesta=mysqli_query($con,$consulta);         
            
            if($fila=mysqli_fetch_array($respuesta)){
                $consulta2="SELECT * FROM `departamentos` WHERE `id_depto`=$fila[fk_depto]";
                $respuesta2=mysqli_query($con,$consulta2);
                if($fila2=mysqli_fetch_array($respuesta2)){
                    print"
                    <section class='inquilino-header'>
                        <h2>Bienvenido $fila[nombre] $fila[apellido]</h2>
                        <p>Mail: $fila[correo]</p>
                        <p>Inmueble: $fila2[calle] $fila2[altura] Piso $fila2[piso]°$fila2[unidad], $fila2[barrio] - $fila2[localidad]</p>
                    </section>";    
                }            
            }
        }
    ?>
</main>

<?php 

include_once("../components/footer.php");

?>