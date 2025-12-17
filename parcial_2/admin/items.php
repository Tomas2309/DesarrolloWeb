<?php 
$pagina="logueado";
$usuario="admin";
include_once("../components/header.php");
?>
<main class="main">

    <?php
        print "<section class='main-item'>";
        include_once("../components/conf/conf.php");
        if(isset($_GET['depto'])){
            $consulta="SELECT * FROM `departamentos`";
            $respuesta=mysqli_query($con,$consulta);
            print"
            <section>
                <h2>Departamentos<a href='form_agregar.php?agregar_depto=ok' class='boton'>-Agregar-</a></h2>
            </section>
            <table class='table-item'>
                <thead>
                    <tr>
                        <th>Calle</th>
                        <th>Altura</th>
                        <th>Piso</th>
                        <th>Unidad</th>
                        <th>Barrio</th>
                        <th>Localidad</th>
                        <th>Estado</th>
                        <th>Codigo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>";
                while($fila=mysqli_fetch_array($respuesta)){
                    print"
                    <tr>
                        <td>$fila[calle]</td>
                        <td>$fila[altura]</td>
                        <td>$fila[piso]</td>
                        <td>$fila[unidad]</td>
                        <td>$fila[barrio]</td>
                        <td>$fila[localidad]</td>
                        <td>$fila[estado]</td>
                        <td>$fila[codigo]</td>
                        <td><a href='form_modificar.php?id_depto=$fila[id_depto]' class='boton_mod'>Modificar</a></td>
                        <td><a href='abm_admin/eliminar.php?id_depto=$fila[id_depto]' class='boton_eliminar'>Eliminar</a></td>
                    </tr>";
                }
                print"</tbody>";
            print"</table>";
                
        }
        else if(isset($_GET['adm'])){
            $consulta2="SELECT * FROM `agentes`";
            $respuesta2=mysqli_query($con,$consulta2);
            print"
            <section>
                <h2>Agentes Inmobiliarios<a href='form_agregar.php?agregar_adm=ok' class='boton'>-Agregar-</a></h2>
            </section>
            <table class='table-item'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Mail</th>
                        <th>Documento</th>
                        <th>Telefono</th>
                        <th>Inmobiliaria</th>
                        <th>Datos de Usuario</th>
                        <th colspan='2'>Acciones</th>
                    </tr>
                </thead>
                <tbody>";
                while($fila=mysqli_fetch_array($respuesta2)){
                    $consulta3="SELECT `correo` FROM `usuarios` WHERE `id_usuarios`=$fila[fk_usuario]";
                    $respuesta3=mysqli_query($con,$consulta3);
                    if ($fila2=mysqli_fetch_array($respuesta3)){
                        $mail_usuario=$fila2['correo'];
                    }
                    print"
                    <tr>
                        <td>$fila[nombre]</td>
                        <td>$fila[apellido]</td>
                        <td>$mail_usuario</td>
                        <td>$fila[documento]</td>
                        <td>$fila[telefono]</td>
                        <td>$fila[inmobiliaria]</td>
                        <td><a href='form_modificar.php?fk_usuario=$fila[fk_usuario]&mod_user=ok&id_agen=$fila[id_agente]'class='boton_mod'>Adm User</td>
                        <td><a href='form_modificar.php?id_agente=$fila[id_agente]&mod_agente=ok' class='boton_mod'>Editar Agente</a></td>
                        <td><a href='abm_admin/eliminar.php?id_agente=$fila[id_agente]&fk_usuario=$fila[fk_usuario]' class='boton_eliminar'>Eliminar</a></td>
                    </tr>";
                }
                print"</tbody>";
            print "</table>";
                
        }
        else if(isset($_GET['men'])){
            print "
                <section>
                    <h2>Mensajes</h2>
                </section>
            ";
            include_once("../components/conf/conf_mensaje.php");
            $consulta4="SELECT * FROM `mensaje`";
            $respuesta4=mysqli_query($con_mensaje,$consulta4);
            print"<section class='mensajes-main'>";
            while($fila4=mysqli_fetch_array($respuesta4)){
                print"
                <div class='mensajes-grupo'>
                    $fila4[fecha]<br>
                    Mensaje de $fila4[nombre] $fila4[apellido]<br>
                    Contacto: $fila4[correo] y $fila4[telefono]<br>
                    <p class='mensaje-texto'>$fila4[texto]</p>
                    <a href='../mensaje/eliminar.php?id=$fila4[id_mensaje]'>
                        <img src='../img/basura.svg' alt='eliminar' width='30'>
                    </a>
                </div>";
            }
            print"</section>";
        }
        else if(isset($_GET['inq'])){
            $consulta5="SELECT * FROM `inquilinos`";
            $respuesta5=mysqli_query($con,$consulta5);
            print"
            <section>
                <h2>Inquilinos</h2>
            </section>
            <table class='table-item'>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Departamento</th>
                        <th>Moneda</th>
                        <th>Valor</th>
                        <th>Inicio</th>
                        <th>Final</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>";
                while($fila5=mysqli_fetch_array($respuesta5)){
                    print"
                    <tr>
                    <td>$fila5[nombre]</td>
                    <td>$fila5[apellido]</td>
                    <td>$fila5[documento]</td>
                    <td>$fila5[telefono]</td>
                    <td>$fila5[correo]</td>";
                    $consulta6="SELECT * FROM `departamentos` WHERE `id_depto`=$fila5[fk_depto]";
                    $respuesta6=mysqli_query($con,$consulta6);
                    while($fila6=mysqli_fetch_array($respuesta6)){
                        print"
                            <td>$fila6[calle] $fila6[altura] $fila6[piso] $fila6[unidad] $fila6[localidad]</td>
                        ";
                    }
                    $consulta7="SELECT * FROM `alquiler` WHERE `id_alquiler`=$fila5[fk_alquiler]";
                    $respuesta7=mysqli_query($con,$consulta7);
                    while($fila7=mysqli_fetch_array($respuesta7)){
                        print"
                            <td>$fila7[moneda]</td>
                            <td>$fila7[valor]</td>
                            <td>$fila7[contrato_inicio]</td>
                            <td>$fila7[contrato_final]</td>
                            <td><a href='form_modificar.php?id_inq=$fila5[id_inquilino]' class='boton_mod'>Modificar</a></td>
                            <td><a href='abm_admin/eliminar.php?id_inq=$fila5[id_inquilino]' class='boton_eliminar'>Eliminar</a></td>
                        ";
                    }
                }
                print"</tbody>";
            print"</table>";
        }
        print "</section>";
    ?>
</main>
<?php
include_once("../components/footer.php")
?>