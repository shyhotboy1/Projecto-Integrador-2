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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <li class="cerrar-sesion"><a href="logout.php" style="color:black">Cerrar sesión</a></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
