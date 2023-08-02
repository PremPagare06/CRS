<?php

require_once "Config.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
//defining elements
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
// insert into the database
if(trim($name) && trim($visitor_email) && trim($subject)  && trim($message)){
    $sql = "INSERT INTO contactus (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt){
        Mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_visitor_email, $param_subject, $param_message);
        //set these parameters
        $param_name = $name;
        $param_visitor_email = $visitor_email;
        $param_subject = $subject;
        $param_message = $message;
        
        //try to execute the query
        if (mysqli_stmt_execute($stmt)){
            header("location: Contact.php");
        }
        else{
            echo "Something went wrong... cannot connect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
/*
$email_form= 'myemail@gmail.com';
$email_subject= 'New Form Submission';
$email_body= "User Name: $name.\n ".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Nessage: $message.\n";
$to= 'pagareprem6@gmail.com'
$headhers="From: $email_from\r\n";
$headhers="Reply-To: $visitor_email\r\n";
mail($to, $email_subject, $email_body, $headhers);
header("location: Contact.php")
*/
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="C:\xampp\htdocs\Crime_Report_System\Login.php ">
    <title>Contact Us</title>
    <meta name="viewport" content="with=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="StyleC.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- font -->
<link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&display=swap" rel="stylesheet">
<!-- icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>
    <section class="header">
        <nav>
            <a href="Home.html"><img src="images/Symbol.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Home.html">Home</a></li>
                    <li><a href="Register.php">Sign up</a></li>
                    <!-- <li><a href="contact.html">Contact Us</a></li> -->
                    <li id="hl">Helpline
                        <div class="sub_menu">
                            <ul>
                                <li>Police <br> <strong>100</strong></li>
                                <li>Traffic Police <br><strong>103</strong></li>
                                <li>Anti-Corruption <br><strong>1031</strong></li>
                                <li>Women in Distress <br><strong>1091</strong></li>
                                <li>Child Line <br><strong>1098</strong></li>
                                <li>Anti Ragging <br><strong>1800-180-5522</strong></li>
                                <li>Domestic abuse and sexual violence <br><strong>181</strong></li>
                            </ul>
                        </div>
                    
                    </li>
                    
                    <li><a href="https://cybercrime.gov.in/"target="_blank">Cyber Crime</a></li>
                </ul>
            </div>
        </nav>
        <div class="text">
            <a href="#Contact1" class="contact-btn">Contact Us</a>
            <!-- <h1>Contact Us</h1> -->
        </div>
    <!-- <div class="text">
        <h1>National Crime Reporting Portal</h1>
        <p>Our Information is Comming soon <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci velit delectus nesciunt eaque voluptatem vitae aliquam sunt placeat natus exercitationem! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, laudantium?</p>
        <a href="Login.php" class="home-btn">Login</a>
        <a href=""class="home-btn">Report Anonymously</a> -->

    </section>

    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
        -->

    </div>
    <!-- contact us -->
    <section class="Contact1" id="Contact1">


        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14995.516102749201!2d73.8222614!3d20.0135914!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb01367e9d5cf969!2sK.%20K.%20Wagh%20Institute%20Of%20Engineering%20Education%20And%20Research!5e0!3m2!1sen!2sin!4v1631453402532!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
        <section class="contactUs">
            <div class="row">
                <div class="col">
                    <div>
                        <i class="material-icons">home</i>
                        <!-- <i class="fa fa-home"></i> -->
                        <span>
                            <h5>this, is address</h5>
                            <p>Nashik, Maharashtra</p>
                        </span>
                    </div>
                    <div>
                        <i class="material-icons">call</i>
                        <!-- <i class="fa fa-phone"></i> -->
                        <span>
                            <h5>+91-915655665</h5>
                            <p>10AM to 6PM</p>
                        </span>
                    </div>
                    <div>
                        <i class="material-icons">email</i>
                        <!-- <i class="fa fa-envolope-o"></i> -->
                        <span>
                            <h5>info@gmail.com</h5>
                            <p>Email Us your Query</p>
                        </span>
                    </div>
                </div>
                <div class="col">
                    <form action="Contact.php" method="post">
                        <input type="text" name="name" placeholder="Enter your name" required>
                        <input type="email"  name="email" placeholder="Enter your email address" required>
                        <input type="text"  name="subject" placeholder="Enter your subject" required>
                        <textarea rows="10"  name="message" placeholder="Message" required></textarea>
                        <button type="submit" class="Send-btn">Send Message</button>
                    </form>
    
                </div>
            </div>
            
        </section>
    </section>
</body>
</html>