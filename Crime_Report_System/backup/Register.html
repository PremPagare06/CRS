<?php
require_once "config.php";

$username = $password = $confirm_password =$name = $address = $pincode = $mobileno = "";
$username_err = $password_err = $confirm_password_err = $name_err = $address_err = $pincode_err = $mobileno_err ="";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    //check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ? "; 
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            //set the value of param username
            $param_username = trim($_POST['username']);
            //try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken";
                
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);


//check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    echo $password_err;
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    echo $password_err;
}
else{
    $password = trim($_POST['password']);
}
//check for confirm password field
if(trim($_POST['password']) != trim($_POST['confirm_password'])){
    $password_err = "Password should match";
    echo $password_err;
}
//check for name field
if(empty(trim($_POST['name']))){
  $name_err = "name cannot be blank";
  echo $name_err;
}
else{
  $name = trim($_POST['name']);
}
//check for address field
if(empty(trim($_POST['address']))){
  $address_err = "address cannot be blank";
  echo $address_err;
}
else{
  $address = trim($_POST['address']);
}
//check for pincode field
if(empty(trim($_POST['pincode']))){
  $pincode_err = "pincode cannot be blank";
  echo $pincode_err;
}
else{
  $pincode = trim($_POST['pincode']);
}
//check for mobile number field
if(empty(trim($_POST['mobileno']))){
  $mobileno_err = "Mobile number cannot be blank";
  echo $mobileno_err;
}
else{
  $mobileno = trim($_POST['mobileno']);
}
//if ther are no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err)  && empty($name_err) && empty($address_err) && empty($pincode_err) && empty($mobileno_err)){
    $sql = "INSERT INTO users (username, password, name, address, pincode, mobileno) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        Mysqli_stmt_bind_param($stmt, "ssssii", $param_username, $param_password, $param_name, $param_address, $param_pincode, $param_mobileno);
        //set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);
        $param_name = $name;
        $param_address = $address;
        $param_pincode = $pincode;
        $param_mobileno = $mobileno;
        //try to execute the query
        if (mysqli_stmt_execute($stmt)){
            header("location: Login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="C:\xampp\htdocs\Crime_Report_System\Login.php ">
  <link href="C:\xampp\htdocs\Crime_Report_System\Home.html ">
  <link rel="stylesheet" href="styleR.css">
  <title>Crime Reporting Portal</title>
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- linking chart.js -->
  <link rel="stylesheet" href="chart.css">

</head>

<body>
  <section class="header">
    <nav>
      <a href="Home.html"><img src="images/Symbol.png"></a>
      <div class="nav-links">
        <ul>
          <li><a href="Home.html">Home</a></li>
          <li><a href="Contact.php">Contact Us</a></li>
          <li><a href="Login.php">Sign In</a></li>

        </ul>
      </div>
    </nav>


    <div class="container">
      <h3> Please Register Here</h3>
      <hr>

      <div class="form">


        <form action="" method="post" class="row g-3">
          <ul>
            <div class="col-md-6">
              <label for="name" class="form-label" style=color:white>Name</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="Surname First">
            </div>
          </ul>

          <ul>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label" style=color:white>Email Id</label>
              <input type="email" class="form-control" name="username" id="inputEmail4" placeholder="Enter Email Id">
            </div>
          </ul>

          <ul>
            <!-- <div class="col-md-6"> -->
            <div class="col-md-6">
              <label for="inputPassword" class="form-label" style=color:white> Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword"
                placeholder="Enter Pasword">
            </div>
            <!-- <div class="col-12"> -->
            <div class="col-md-6">
              <!-- confirm_password -->
              <label for="inputPassword2" class="form-label" style=color:white>Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" id="inputPassword2"
                placeholder="Re-enter Pasword">
            </div>
          </ul>
          <ul>
            <div class="col-md-6">
              <label for="inputCity" class="form-label" style=color:white>Address</label>
              <input type="text" class="form-control" name="address" id="inputCity" placeholder="Enter Address">
            </div>
          </ul>
          <!-- <div class="col-md-4"> -->
          <div class="pincode">
            <label for="inputPincode" class="form-label" style=color:white>Pincode</label>
            <input type="text" id="inputPincode" name="pincode" class="form-control" placeholder="Enter Pincode">
          </div>
          <div class="MobNo">
            <label for="inputMob" class="form-label" style=color:white>Mobile No.</label>
            <input type="text" class="form-control" name="mobileno" id="inputMob" placeholder="Enter Mobile Number">
          </div>
          <div class="col-12">
            <button type="submit" onclick="Login.php" class="btn btn-primary">Sign Up</button>
  
            <p class="Account">Have an Account?</p><a class="Account" href="Login.php">Sign In</a>

          </div>
        </form>
      </div>



    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <!-- chart -->

    <div class="chart">
      <h3>State Wise Crime Rates in India</h3>
      <canvas id="myChart"></canvas>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"
      integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="chart.js"></script>



  </section>
</body>

</html>