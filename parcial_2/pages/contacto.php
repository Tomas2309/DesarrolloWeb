<?php
session_start();
if($_SESSION!=NULL){
    $pagina="logueado";
}else{
    $pagina="no";
}
$usuario="normal";
include_once("../components/header.php");
?>

<main>
    <form action="../mensaje/enviar_mensaje.php" method="post" class="form"> 
        <img class="mb-4" src="../img/logo.png" alt="logo_inmobiliaria" width="100" height="57"> 
        <h1 class="h3 mb-3 fw-normal">Contactanos</h1> 
        <?php
            if(isset($_GET['txt'])){
                print "
                <div class='alert alert-danger' role='alert'>
                    No se ha escrito un mensaje
                </div>";
            }
            if(isset($_GET['nom'])){
                print "
                <div class='alert alert-danger' role='alert'>
                    No se ha escrito un nombre/apellido
                </div>";
            }
            if(isset($_GET['con'])){
                print "
                <div class='alert alert-danger' role='alert'>
                    No se ha escrito un medio de contacto
                </div>";
            }
            if(isset($_GET['mensaje'])){
                print "
                <div class='alert alert-success' role='alert'>
                    Mensaje enviado
                </div>";
            }
        ?>
        <div class="form-floating"> 
            <input type="text" class="form-control" id="floatingInput" name="nombre"> 
            <label for="floatingInput">Nombre</label> 
        </div> 
        <div class="form-floating"> 
            <input type="text" class="form-control" id="floatingInput" name="apellido"> 
            <label for="floatingInput">Apellido</label> 
        </div> 
        <div class="form-floating"> 
            <input type="email" class="form-control" id="floatingInput" name="correo"> 
            <label for="floatingInput">Correo electronico</label> 
        </div> 
        <div class="form-floating"> 
            <input type="tel" class="form-control" id="floatingInput" name="telefono"> 
            <label for="floatingInput">Telefono</label> 
        </div> 
        <div> 
            <textarea name="texto" class="form-control" id="texto" placeholder="Mensaje"></textarea>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Enviar mensaje</button> 
    </form>
</main>

<?php
include_once("../components/footer.php");
?>