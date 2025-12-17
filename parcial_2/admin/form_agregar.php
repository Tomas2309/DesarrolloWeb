<?php
$pagina="logueado";
$usuario="admin";
include_once("../components/header.php");
if(isset($_GET['agregar_depto'])){
    print"
        <form action='abm_admin/alta.php' method='post' class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 

            <h1 class='h3 mb-3 fw-normal'>Nuevo Departamento</h1> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='calle'  name='calle'> 
                <label for='calle'>Calle</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='altura'> 
                <label for='floatingInput'>Altura</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='piso'> 
                <label for='floatingInput'>Piso</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='unidad'> 
                <label for='floatingInput'>Unidad</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='barrio'> 
                <label for='floatingInput'>Barrio</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='localidad'> 
                <label for='floatingInput'>Localidad</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='estado'> 
                <label for='floatingInput'>Estado</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='codigo'> 
                <label for='floatingInput'>Codigo</label> 
            </div> 
            <button class='btn btn-primary w-100 py-2' type='submit'>Agregar departamento</button> 
        </form>
    
    ";
}

if(isset($_GET['agregar_adm'])){
    print"
        <form action='abm_admin/alta.php' method='post' class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 

            <h1 class='h3 mb-3 fw-normal'>Nuevo Agente</h1> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='nombre'  name='nombre'> 
                <label for='nombre'>Nombre</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='apellido'> 
                <label for='floatingInput'>Apellido</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='documento'> 
                <label for='floatingInput'>Documento</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='telefono'> 
                <label for='floatingInput'>Telefono</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput'  name='inmobiliaria'> 
                <label for='floatingInput'>Inmobiliaria</label> 
            </div> 
            <button class='btn btn-primary w-100 py-2' type='submit'>Agregar Agente</button> 
        </form>
    
    ";
}

include_once("../components/footer.php");
?>