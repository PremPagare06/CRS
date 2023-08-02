<?php
session_start();


if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true){
    header("location: Logout.php");
}

require "Config.php";
$topic = $description = $name = $email = $mobileno = $gender = $dob = $doi = $city = $state = $suspect = $place = $present=  "";
$Id= $_SESSION['id'];
$topic_err = $description_err = $name_err = $email_err = $mobileno_err = $gender_err = $dob_err = $doi_err = $city_err = $state_err = $suspect_err = $place_err = $present_err = "";

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
//check for name field
if(empty(trim($_POST['name']))){
  $name_err = "name cannot be blank";
  echo $name_err;
}
else{
  $name = trim($_POST['name']);
}
//check for email field
if(empty(trim($_POST['email']))){
  $email_err = "Email cannot be blank";
  echo $email_err;
}
else{
  $email = trim($_POST['email']);
}
//check for mobileno field
if(empty(trim($_POST['mobileno']))){
  $mobileno_err = "Mobile Number cannot be blank";
  echo $mobileno_err;
}
else{
  $mobileno = trim($_POST['mobileno']);
}
//check for gender field
if(empty(trim($_POST['gender']))){
  $gender_err = "Please tick your Gender";
  echo $gender_err;
}
else{
  $gender = trim($_POST['gender']);
}
//check for dob field
if(empty(trim($_POST['dob']))){
  $dob_err = "Please enter your Date of Birth";
  echo $dob_err;
}
else{
  $dob = trim($_POST['dob']);
}
//check for doi field
if(empty(trim($_POST['doi']))){
  $doi_err = "Please enter your Date of Incident";
  echo $doi_err;
}
else{
  $doi = trim($_POST['doi']);
}
//check for city field
if(empty(trim($_POST['city']))){
  $city_err = "City cannot be blank";
  echo $city_err;
}
else{
  $city = trim($_POST['city']);
}
//check for state field
if(empty(trim($_POST['state']))){
  $state_err = "state cannot be blank";
  echo $state_err;
}
else{
  $state = trim($_POST['state']);
}
//check for present field
if(empty(trim($_POST['present']))){
  $present_err = "Please Enter whether you were present at the Incident";
  echo $present_err;
}
else{
  $present = trim($_POST['present']);
}
//check for suspect field
if(empty(trim($_POST['suspect']))){
  $suspect_err = "City cannot be blank";
  echo $suspect_err;
}
else{
  $suspect = trim($_POST['suspect']);
}
//check for place field
if(empty(trim($_POST['place']))){
  $place_err = "place cannot be blank";
  echo $place_err;
}
else{
  $place = trim($_POST['place']);
}

//if ther are no errors, go ahead and insert into the database
  if(empty($topic_err) && empty($description_err) && empty($name_err) && empty($email_err) && empty($mobile_err) && empty($dob_err) && empty($doi_err) && empty($place_err) && empty($suspect_err) && empty($present_err) && empty($city_err) && empty($state_err) && empty($gender_err)){
    $sql = "INSERT INTO report_details (Id, name, email, mobileno, dob, gender, doi, suspect, place, city, state, present, topic, description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ississssssssss", $param_Id, $param_name, $param_email, $param_mobileno, $param_dob, $param_gender, $param_doi, $param_suspect, $param_place, $param_city, $param_state, $param_present, $param_topic, $param_description );
        //set these parameters
        $param_Id = $Id;
        $param_name = $name;
        $param_email = $email;
        $param_mobileno = $mobileno;
        $param_dob = $dob;
        $param_gender = $gender;
        $param_doi = $doi;
        $param_suspect = $suspect;
        $param_place = $place;      
        $param_city = $city;
        $param_state = $state;
        $param_present = $present;
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
  <link rel="stylesheet" href="styleRp.css">
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
          <li><a href="Crud.php">Profile</a></li>
          <li><a href="Logout.php">Sign Out</a></li>

        </ul>
      </div>
    </nav>
    </div>
    <div class="container">
    <h1>Report</h1>
      <hr>
      <form action="" method="post" class="row g-3">

        <label for="name">Name Of Reporter</label>
        <input type="text" class="input-name" name="name" id="name" placeholder="Surname First">    
        <label for="">Email ID</label>
        <input type="email" name="email" id="email" class="input" placeholder="Email id">
        <label for="mobileno">Mobile Number</label>
        <input type="text" name="mobileno" id="mobileno" class="input" placeholder="+91">

        <label for="dob">Date Of Birth</label>
        <input type="date" name="dob" id="dob"class="input">

        <label for="">Gender</label>
        <span class="tick" >
          <input type="radio" name="gender" value="Male"> Male<br>
          <input type="radio" name="gender" value="Female"> Female<br>
          <input type="radio" name="gender" value="Other"> Other
        </span>

        <label for="doi">Date of incident</label>
        <input type="date" name="doi" id="doi" class="input">

        <label for="suspect">Name Of Suspect/Accused</label>
        <input type="text" class="input" name="suspect" id="suspect" placeholder="Name">

        <label for="place">Incident Place</label>
        <input type="text" class="input" name="place" id="place" placeholder="Area/location Where the incident occured">

        <label for="city">City</label>
        <input type="text" class="input" name="city" id="city" placeholder="City">

        <label for="state">State</label>
        <input type="text" class="input" name="state" id="state" placeholder="State">

        <label for="present">Were you present at the incident?</label>
        <span class="tick" name="present" id="present">
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
</body>

</html>