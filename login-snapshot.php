<?php
    include_once 'database.php';

    session_start();

    if(isset($_GET['cerrar_sesion'])){
        session_unset();

        // destroy the session
        session_destroy();
    }

    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
            break;

            case 2:
            header('location: colab.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuarios WHERE username = :username AND password = :password');
        $query->execute(['username' => $username, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);

        if($row == true){
            $rol = $row[3];

            $_SESSION['rol'] = $rol;
            switch($rol){
                case 1:
                    header('location: admin.php');
                break;

                case 2:
                header('location: colab.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            echo "Nombre de usuario o contraseña incorrecto";
        }


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/push.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>



<body>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Manejador de OMSA</h5>
        <p>
          Solo usar por administradores!
        </p>
      </div>
    </div>


  <!-- Notificaciones Push -->
          <script>
                window.onload = function(){
                  Push.Permission.request();
                }

                document.getElementById('login').onclick = function()
                {
                    Push.create('Te haz logeado correctamente',{
                      body:'Bienvenido administrador',
                      icon:'/style/images/logo-principal.png',
                      timeout:4000,
                      onClick: function() {
                        alert('Si funciona');
                      }
                    })
                }
          </script>

    <!-- Icon -->




    <section id="contact">

        <video src="video/Walking-Away.mp4" autoplay="" loop=""></video>

        <div class="container" id="container-contact">

            <div class="row">

                <div class="col-md-6 col-lg-6 text-center" id="tit-contacto">
                    <h2 class="section-heading">Panel de Control</h2>
                    <div class="text-center">
                      <img src="/style/images/logo-principal.png" class="img-fluid" alt="Responsive image" />
                    </div>
                    <!-- Form -->
                           <div class="form-group">
                              <div class="text-center">
                                <form action="#" method="POST">
                                  <input type="text" id="login" class="fadeIn second" name="username" placeholder="Login">
                                  <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
                                    <button type="submit" class="btn btn-primary" >Log in</button>
                              </form>
                               <!-- Sign In -->
                            <button href="Sign-in.php" class="btn btn-dark">Sign in</button>
                          </div>
                        </div>










      <!-- bootstrap instances -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
