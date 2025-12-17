<?php 
session_start();
$pagina="logueado";
$usuario="admin";
include_once("../components/header.php");
?>
<main class="main">
    <section>
        <?php
        if($_SESSION==NULL){
            header("Location:../index.php");
        }
        include_once("../components/conf/conf.php");      
        
        if (isset($_GET['user'])){
            $user=htmlspecialchars(($_GET['user']));
            $consulta="SELECT * FROM `agentes` WHERE `fk_usuario`='$user'";
            $respuesta=mysqli_query($con,$consulta);
            
            if($fila=mysqli_fetch_array($respuesta)){
                print"
                <div class='main_titulo'>
                    <div class='titulo_caja'>
                        <img src='../img/logo.png' alt='logo de la inmobiliaria' height='50'>
                        <h1>New Oro Propiedades</h1>
                    </div>
                </div>

                <section class='index-admin-header'>
                    <h2>Bienvenido $fila[nombre] $fila[apellido]</h2>
                </section>
                ";
            }
        }    
        ?>
    </section>
    <br>
    <section>
        <div class="container container-items"> 
            <div class="row row-cols-1 col card shadow-sm "> 
                <div class="card-body cards_edit"> 
                    <a href="../admin/items.php?depto=ok">
                        <strong>Departamentos</strong>
                        <p class="card-text">Visualice, agregue, modifique o elimine departamentos</p> 
                        <div class="d-flex justify-content-between align-items-center"> 
                            <button type="button" class="boton">Ingresar</button> 
                        </div> 
                    </a>
                </div>                 
            </div>
            <div class="row row-cols-1 card shadow-sm"> 
                <div class="card-body cards_edit"> 
                    <a href="../admin/items.php?adm=ok">
                        <strong>Administradores</strong>
                        <p class="card-text">Gestion de administradores</p> 
                        <div class="d-flex justify-content-between align-items-center"> 
                                <button type="button" class="boton">Ingresar</button> 
                        </div> 
                    </a>
                </div>                 
            </div>              
            
            <div class="row row-cols-1 card shadow-sm"> 
                <div class="card-body cards_edit"> 
                    <a href="../admin/items.php?inq=ok">
                        <strong>Inquilinos</strong>
                        <p class="card-text">Gestion de Inquilinos</p> 
                        <div class="d-flex justify-content-between align-items-center"> 
                            <button type="button" class="boton">Ingresar</button> 
                        </div> 
                    </a>
                </div>                 
            </div>
            <div class="row row-cols-1 card shadow-sm"> 
                <div class="card-body cards_edit"> 
                    <a href="../admin/items.php?men=ok">
                        <strong>Mensajes</strong>
                        <p class="card-text">Visualiza tus mensajes</p> 
                        <div class=""> 
                            <button type="button" class="boton">Ingresar</button> 
                        </div> 
                    </a>
                </div>                 
            </div>
        </div>
    </section>
</main>

<?php 
include_once("../components/footer.php");
?>