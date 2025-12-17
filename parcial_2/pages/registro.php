<?php 
$pagina="no";
$usuario="normal";
include_once("../components/header.php");

?>
<form class="form" method="post" action="../log/reg.php"> 
    <img class="mb-4" src="../img/logo.png" alt="logo_inmobiliaria" width="100" height="57"> 
    <h1 class="h3 mb-3 fw-normal">Registro</h1> 
    <?php
    if(isset($_GET['error'])){
        print"
        <div class='alert alert-danger role='alert'>
            No se ingresaron todos los datos
        </div>
        ";
    }
    if(isset($_GET['code'])){
        print"
        <div class='alert alert-danger role='alert'>
            Codigo Incorrecto
        </div>
        ";
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
        <input type="text" class="form-control" id="floatingInput" name="documento"> 
        <label for="floatingInput">Documento</label> 
    </div> 
    <div class="form-floating"> 
        <input type="tel" class="form-control" id="floatingInput" name="telefono"> 
        <label for="floatingInput">Telefono</label> 
    </div> 
    <div> 
    <div class="form-floating"> 
        <input type="email" class="form-control" id="floatingInput" name="correo"> 
        <label for="floatingInput">Correo</label> 
    </div>
    <div class="form-floating"> 
        <input type="password" class="form-control" id="floatingInput" name="clave"> 
        <label for="floatingInput">Clave</label> 
    </div> 
    <div class="form-floating"> 
        <input type="text" class="form-control" id="floatingPassword" name="codigo"> 
        <label for="floatingPassword">Codigo</label> 
    </div> 
    <button class="btn btn-primary w-100 py-2" type="submit">Registrate</button> 
    <div class="div_enlace_registro">
        <a href="../pages/contacto.php" class="enlace_registro">Contactanos para recibir tu codigo</a>
    </div>
</form>

<?php 

include_once("../components/footer.php");

?>