<?php 
include_once 'database.php';


if(isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rol_id'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $rol_id = $_POST['rol_id'];

        $db = new Database();
        $query = $db->connect()->prepare(
          "INSERT INTO usuarios 
            VALUES( ':id', ':username', ':password', ':rol_id')"
        );
        
        $query->execute([
          'id' => $id,
          'username' => $username, 
          'password' => $password,
          'rol_id' => $rol_id
        ]);

        $row = $query->fetch(PDO::FETCH_NUM);

 }
?>


<!DOCTYPE html>
<html lang="en">
<body>
	 <h1>SignUp</h1>
    <span>or <a href="login.php">Login</a></span>
 	<form action="signup.php" method="POST">
      	<input name="id" type="text" placeholder="Enter your id">
      	<input name="username" type="text" placeholder="Enter your username">
      	<input name="password" type="password" placeholder="Enter your Password">
      	<input name="rol_id" type="rol_id" placeholder="Confirm your rol id">
      	<input type="submit" value="Submit">
    </form><div>
   
</body>
</html>