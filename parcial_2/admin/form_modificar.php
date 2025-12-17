<?php
$pagina="logueado";
$usuario="admin";
include_once("../components/header.php");
?>

<main>

<?php
$id;
include_once("../components/conf/conf.php");
if(isset($_GET['id_depto'])){
    $id=$_GET['id_depto'];
    $consulta="SELECT * FROM `departamentos` WHERE `id_depto`='$id'";
    $respuesta=mysqli_query($con,$consulta);
    if($fila=mysqli_fetch_array($respuesta)){
        print"
        <form action='abm_admin/modificar.php' method='post' class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 

            <h1 class='h3 mb-3 fw-normal'>Modificar Departamento</h1> 
            <p>$fila[calle] $fila[altura] $fila[piso] $fila[unidad] - $fila[localidad]</p>

            <div> 
                <label for='calle'>Calle</label> 
                <input type='text' class='form-control' id='calle'  name='calle'> 
            </div> 
            <div> 
                <label for='floatingInput'>Altura</label> 
                <input type='text' class='form-control' id='floatingInput'  name='altura'> 
            </div> 
            <div> 
                <label for='floatingInput'>Piso</label> 
                <input type='text' class='form-control' id='floatingInput'  name='piso'> 
            </div> 
            <div> 
                <label for='floatingInput'>Unidad</label> 
                <input type='text' class='form-control' id='floatingInput' name='unidad'> 
            </div> 
            <div> 
                <label for='floatingInput'>Barrio</label> 
                <input type='text' class='form-control' id='floatingInput'  name='barrio'> 
            </div> 
            <div> 
                <label for='floatingInput'>Localidad</label> 
                <input type='text' class='form-control' id='floatingInput'  name='localidad'> 
            </div> 
            <div> 
                <label for='floatingInput'>Estado</label> 
                <input type='text' class='form-control' id='floatingInput'  name='estado'> 
            </div> 
            <div> 
                <label for='floatingInput'>Codigo</label> 
                <input type='text' class='form-control' id='floatingInput'  name='codigo'> 
            </div> 
                <input type='hidden' name='id_mod' value='$fila[id_depto]'> 
            <button class='btn btn-primary w-100 py-2' type='submit'>Modificar</button> 
        </form>
        ";}
}

if(isset($_GET['id_inq'])){
    $id_inq=$_GET['id_inq'];
    $consulta="SELECT * FROM `departamentos` WHERE `id_depto`='$id'";
    $respuesta=mysqli_query($con,$consulta);
    if($fila=mysqli_fetch_array($respuesta)){
        print"
        <form action='abm_admin/modificar.php' method='post' class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 

            <h1 class='h3 mb-3 fw-normal'>Modificar Datos de alquiler</h1> 
            <p>$fila[calle] $fila[altura] $fila[piso] $fila[unidad] - $fila[localidad]</p>

            <div> 
                <label for='calle'>Calle</label> 
                <input type='text' class='form-control' id='calle'  name='calle'> 
            </div> 
            <div> 
                <label for='floatingInput'>Altura</label> 
                <input type='text' class='form-control' id='floatingInput'  name='altura'> 
            </div> 
            <div> 
                <label for='floatingInput'>Piso</label> 
                <input type='text' class='form-control' id='floatingInput'  name='piso'> 
            </div> 
            <div> 
                <label for='floatingInput'>Unidad</label> 
                <input type='text' class='form-control' id='floatingInput' name='unidad'> 
            </div> 
            <div> 
                <label for='floatingInput'>Barrio</label> 
                <input type='text' class='form-control' id='floatingInput'  name='barrio'> 
            </div> 
            <div> 
                <label for='floatingInput'>Localidad</label> 
                <input type='text' class='form-control' id='floatingInput'  name='localidad'> 
            </div> 
            <div> 
                <label for='floatingInput'>Estado</label> 
                <input type='text' class='form-control' id='floatingInput'  name='estado'> 
            </div> 
            <div> 
                <label for='floatingInput'>Codigo</label> 
                <input type='text' class='form-control' id='floatingInput'  name='codigo'> 
            </div> 
                <input type='hidden' name='id_mod' value='$fila[id_depto]'> 
            <button class='btn btn-primary w-100 py-2' type='submit'>Modificar</button> 
        </form>
        ";}
}

if(isset($_GET['mod_user'])and isset($_GET['fk_usuario'])and isset($_GET['id_agen'])){
    $fk_usuario=($_GET['fk_usuario']);
    $id_agen=$_GET['id_agen'];
    print"
        <form action='abm_admin/modificar.php?user=mod' method='post' class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 
            <h1 class='h3 mb-3 fw-normal'>Modificar Usuario</h1> 
            <div class='form-floating'> 
                <input type='email' class='form-control' id='floatingInput' placeholder='name@example.com' name='correo'> 
                <label for='floatingInput'>Correo electronico</label> 
            </div> 
            <div class='form-floating'> 
                <input type='password' class='form-control' id='floatingPassword' placeholder='Password' name='clave'> 
                <label for='floatingPassword'>Clave</label> 
            </div> 
            <input type='hidden' value='$fk_usuario' name='fk_usuario'>
            <input type='hidden' value='$id_agen' name='id_agen'>
            <button class='btn btn-primary w-100 py-2' type='submit'>Actualizar</button> 
        </form>";
}

if(isset($_GET['mod_agente'])and isset($_GET['id_agente'])){
    $id=($_GET['id_agente']);
    print"
        <form action='abm_admin/modificar.php?user=mod' method='post'  class='form'> 
            <img class='mb-4' src='../img/logo.png' alt='logo_inmobiliaria' width='100' height='57'> 
            <h1 class='h3 mb-3 fw-normal'>Modificar Usuario</h1> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='nombre'> 
                <label for='floatingInput'>Nombre</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='apellido'> 
                <label for='floatingInput'>Apellido</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='documento'> 
                <label for='floatingInput'>Documento</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='telefono'> 
                <label for='floatingInput'>Telefono</label> 
            </div> 
            <div class='form-floating'> 
                <input type='text' class='form-control' id='floatingInput' name='inmobiliaria'> 
                <label for='floatingInput'>Inmobiliaria</label> 
            </div> 
            <input type='hidden' value='$id' name='id_agente'>
            <button class='btn btn-primary w-100 py-2' type='submit'>Actualizar</button> 
        </form>";
}


?>

</main>

<?php
include_once("../components/footer.php");
?>