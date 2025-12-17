<?php 
$pagina="no";
$usuario="normal";
include_once("../components/header.php");

?>
<form action="../log/log.php" method="post" class="form"> 
    <img class="mb-4" src="../img/logo.png" alt="logo_inmobiliaria" width="100" height="57"> 
    <?php
    if(isset($_GET['log'])){
        print"
        <div class='alert alert-danger role='alert'>
            Usuario o Clave incorrecta
        </div>
        ";
    }
    ?>
    <h1 class="h3 mb-3 fw-normal">Inicio de Sesion</h1> 
    <div class="form-floating"> 
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo"> 
        <label for="floatingInput">Correo electronico</label> 
    </div> 
    <div class="form-floating"> 
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="clave"> 
        <label for="floatingPassword">Clave</label> 
    </div> 
    <button class="btn btn-primary w-100 py-2" type="submit">Iniciar</button> 
    <div class="div_enlace_registro">
        <a href="../pages/registro.php" class="enlace_registro">Registrate para crear una cuenta nueva</a>
    </div>
</form>

<?php 

include_once("../components/footer.php");

?>