<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true){
    header("location: Logout.php");
}

require "Config.php";
$topic = $description =  "";
$Id= $_SESSION['id'];
$topic_err = $description_err = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){

//check if topic is empty
if(empty(trim($_POST['topic']))){
  $topic_err = "Topic cannot be blank";
  echo $topic_err;
}
else{
  $topic = trim($_POST['topic']);
} 

//check for description field
if(empty(trim($_POST['description']))){
  $description_err = "Description cannot be blank";
  echo $description_err;
}
else{
  $description = trim($_POST['description']);
}

//if ther are no errors, go ahead and insert into the database
  if(empty($topic_err) && empty($description_err)){
    $sql = "INSERT INTO report_details (Id, topic, description ) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "iss", $param_Id, $param_topic, $param_description );
        //set these parameters
        $param_Id = $Id;
        $param_topic = $topic;
        $param_description = $description;
        //try to execute the query
        if (mysqli_stmt_execute($stmt)){
            
        }
        else{
            echo "Something went wrong... Please Try Again ";
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
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="C:\xampp\htdocs\Crime_Report_System\Logout.php ">
  <link href="C:\xampp\htdocs\Crime_Report_System\Home.html ">
  <title>Crime Reporting Portal</title>
  <link rel="stylesheet" href="Anyo.css">
  <meta name="viewport" content="with=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <section class="header">
    <nav>
      <a href="Home.html"><img src="images/Symbol.png"></a>
      <div class="nav-links">
        <ul>
          <li><a href="Home.html">Home</a></li>
          <li><a href="Contact.php">Contact Us</a></li>
          <li><a href="Crud.php">Profile</a></li>

        </ul>
      </div>
    </nav>
    </div>
    <div class="container">
      <h1>Anonymous Report</h1>
      <hr>
      <form action="" method="post" class="row g-3">

        <label for="">Name Of Reporter</label>
        <span class="name">
          <input type="text" class="input-name" placeholder="Surname First">
        </span>
        <label for="">Date Of Birth</label>
        <input type="date" class="input">

        <label for="">Gender</label>
        <span class="tick">
          <input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other
        </span>

        <label for="">Date of incident</label>
        <input type="date" class="input">

        <label for="">Name Of Suspect/Accused</label>
        <input type="text" class="input" placeholder="Name">

        <label for="">Incident Place</label>
        <input type="text" class="input" placeholder="Area/location Where the incident occured">

        <label for="">City</label>
        <input type="text" class="input" placeholder="City">

        <label for="">State</label>
        <input type="text" class="input" placeholder="Name">

        <label for="">Were you present at the incident?</label>
        <span class="tick">
          <input type="radio" name="present" value="Yes"> Yes<br>
          <input type="radio" name="present" value="No"> No<br>
        </span>

        <label for="topic">Report Relates to:</label>
        <input class="input" list="datalistOptions" name="topic" id="topic" placeholder="Type to search...">
        <datalist id="datalistOptions">
          <option value="Robbery">
          <option value="Murder">
          <option value="Cyber Crime">
          <option value="Accident">
          <option value="Extortion">
          <option value="Abuse">
          <option value="Dowry">
          <option value="Other">
        </datalist>
        <div class=" mb-3">
          <label for="file" class="form-label">Upload Evidence(Upload audio, video, image or any document
            format)</label><br>
          <input type="file" class="input-file" name="file" id="file"
            placeholder="Upload audio, video, image or any document format">
          <br><button type="submit" name="upload" class="btn btn-primary">Upload</button>
        </div>
        <br>
        <div class=" mb-3">
          <label for="description" class="form-label">Give a Brief Description of the Incident</label>
          <textarea class="form-control" name="description" id="description" rows="10"
            placeholder="Describe the incident briefly"> </textarea>
        </div>
        <br>
        <div class="col-12">
          <button type="submit" class="btn">Submit</button>
        </div>

      </form>
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
  </section>

  <!-- popup -->
  <div class="popup">
    <button id="close">&times;</button>
    <div class="alert">
      <h2>Alert</h2>
    </div>
    <hr class="ruler">
    <p>
        Reporting Anonymously keeps your id confidential. To track your Report an unique id will be provided. It is not not mandotory to mention your name while Reporting Anonymously.
    </p>
    <!-- <a class="go"  href="#">Let's Go</a> -->
</div>
<!--Script-->
<script >
    window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        1000
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
</script>
</body>

</html>