<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <title>Administracion de alquiler</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark nav_display" aria-label="First navbar example"> 
            <ul class="nav">
                <?php
                    if ($pagina=="logueado"){
                        if ($usuario=="admin"){
                            print"
                            <li class='nav_orden'>
                                <a href='../admin/index.php'>
                                    <img src='../img/home.svg' alt='home' class='icono'>INICIO
                                </a>
                            </li>";

                        }else{
                            print"
                            <li class='nav_orden'>
                                <a href='../inquilino/index.php'>
                                    <img src='../img/home.svg' alt='home' class='icono'>INICIO
                                </a>
                            </li>";

                        }
                    }else{
                        print"
                        <li class='nav_orden'>
                            <a href='../pages/inicio.php'>
                                <img src='../img/home.svg' alt='home' class='icono'>INICIO
                            </a>
                        </li>";

                    }
                    if($usuario!="admin"){
                        print"
                        <li class='nav_orden'>
                            <a href='../pages/contacto.php'>
                                <img src='../img/contact.svg' alt='contact' class='icono'>CONTACTO
                            </a>
                        </li>
                        "
                        ;
                    }
                ?>

                <?php
                    if($pagina=="logueado"){
                        print"
                        <li class='nav_orden'>
                            <a href='../log/close.php'>
                                <img src='../img/log.svg' alt='cerrar' class='icono'>CERRAR SESION
                            </a>
                        </li>
                        ";
                    }else if ($pagina=="no"){
                        print"
                        <li class='nav_orden'>
                            <a href='../pages/login.php'>
                                <img src='../img/log.svg' alt='log-in' class='icono'>INGRESAR
                            </a>
                        </li>
                        ";

                    }
                ?>
            </ul>  
            <ul class="nav nav_dos">
                <li class="nav_logo">
                    <a href="../pages/inicio.php">
                        <img src="../img/logo.png" alt="logo de la inmobiliaria" height="30">
                    </a>
                </li>
                
            </ul>      
        </nav>
    </header>
