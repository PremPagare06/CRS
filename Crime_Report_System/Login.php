<?php
//script will handle login
session_start();
//check if user is already logged in
if(isset($_SESSION['username'])){
  header("location: Report.php");
}
require_once "Config.php";
$username = $password = "";
$err = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
  {
    $err = "Please enter correct username and password";
  }
  else{
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  }
  if(empty($err)){
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    //try to execute the statement
    if(mysqli_stmt_execute($stmt)){
      mysqli_stmt_store_result($stmt);
      if(mysqli_stmt_num_rows($stmt) == 1){
        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
        if(mysqli_stmt_fetch($stmt)){
          if(password_verify($password, $hashed_password)){
            //this means the password is correct..allow user to login
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;
            //redirect user to Report page
            header("location: Report.php");
            
          }
          else{
            echo " Wrong Password";
          }
        }
      
      
      }
    }
  }
}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="C:\xampp\htdocs\Crime_Report_System\Register.php ">
    <link href="C:\xampp\htdocs\Crime_Report_System\Report.php ">
    <link href="C:\xampp\htdocs\Crime_Report_System\Home.html ">
    <title>Crime Reporting Portal</title>
    <link rel="stylesheet" href="styleLo.css">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <section class="header">
  <nav>
            <a href="Home.html"><img src="images/Symbol.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                    <li><a href="Register.php">Sign Up</a></li>
                    
                </ul>
            </div>
        </nav>


<div class="container">
<h3> Welcome</h3>
<hr>
<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Username</label>
    
    <input type="email" class="form-control" name="username" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email-id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password">
  </div>
  <div>
  <button type="submit"  class="btn btn-primary">Login</button>
  </div>
</form>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</section>
  </body>
</html>