<?php

    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: login.php');
    }else{
        if($_SESSION['rol'] != 1){
            header('location: login.php');
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>OMSA-AdminPanel</title>
</head>
<link rel="stylesheet" type="text/css" href="/style/style.css">
</head>
<body>
    <h1>Admin-Panel</h1>
    <div class="img">
        <img src="/style/images/logo-principal.png" alt="Logo OMSA">
    </div>
      

    <div>
        <form id="userForm">

            <label for="username">Usuario:</label><br>
            <input type="text" id="username" name="username"><br><br>

            <label for="identifier">ID:</label><br>
            <input type="text" id="identifier" name="identifier"><br><br>

            <button name="añadir" id="addUsername">Añadir</button>
            <button >Ver</button>
            <button >Editar</button>
        </form>
    </div>

    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

   
</body>
</html>