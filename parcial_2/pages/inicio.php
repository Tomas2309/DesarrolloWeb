<?php 
$pagina="no";
$usuario="normal";
include_once("../components/header.php");

?>
<main class="main">
    <div class="main_titulo">
        <div class="titulo_caja">
            <img src="../img/logo.png" alt="logo de la inmobiliaris" height="50">
            <h1>New Oro Propiedades</h1>
        </div>
    </div>
    <section>
        <div class=" px-4 py-5 filtro" id="hanging-icons"> 
            <h2 class="pb-2 border-bottom">Bienvenidos al portal inmobiliario</h2> 
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 flex"> 
                <div class="col d-flex align-items-start cards_edit"> 
                        <a href="login.php">
                            <h3 class="fs-2 text-body-emphasis subrayado">Iniciar Sesion</h3> 
                            <p>🏠Inicia Sesion como Inquilino para llevar un mejor control de tu alquiler.</p>
                            <p>🧑‍💼Inicia Sesion como Administrador y gestiona tus alquileres</p>
                            <button class="boton">Inicio</button> 
                        </a>
                </div> 
                <div class="col d-flex align-items-start cards_edit"> 
                        <a href="registro.php">
                            <h3 class="fs-2 text-body-emphasis subrayado">Registrarse</h3> 
                            <p>👌Registrate y descubri las facilidades que este sistema ofrece para vos</p> 
                            <p>👍No lo dudes! Muchos ya optaron por nuestro servicio</p>
                            <button class="boton">Registro</button> 
                        </a>
                </div> 
            </div> 
        </div>

    </section>
</main>

<?php 

include_once("../components/footer.php");

?>