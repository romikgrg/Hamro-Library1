<?php
include "connection.php";
include "navbar.php";
?>
<html>
<title>
    Hamro Library
</title>
<link rel="stylesheet" type="text/css" href="home.css">
<body>
<section class="banner-area" id="home">
</section>

<section class="about-area" id="about">
    <div class="text-part">
        <h1>
About Us</h1>
<p>
Hamro Library is a Web App that will help in day to day activities of Library.
 </p>
</div>
</section>

<section class="contact-area" id="contact">
    <div class="text-part">
        <h1>
Contact</h1>
<?php
 $message_sent = false; 
 if(isset($_POST['email']) && $_POST['email'] !=''){
     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userName=$_POST['name'];
            $userEmail=$_POST['email'];
            $message=$_POST['message'];
            
            $to = "ronikgrg59@gmail.com";
            $body = "";
            
            $body .="From: ".$userName. "\r\n";
            $body .="Email: ".$userEmail. "\r\n";
            $body .="Message: ".$message. "\r\n";
            
            mail($to,$userName,$body,);
             $message_sent = true;
     }           
 }
?>
<?php
            if($message_sent):
         ?>
            <div class="h3">
            <h3">Thanks, We'll be in touch</h3>
            </div>
        <?php
        else:
        ?>
        <div class="Contact-title">
        </div>
        <div class="contact-form">
            <form id="contact-form" method="post" action="contact.php">
                <input type="text" class="form-control" name="name"  placeholder="Your Name" required><br>
                <input type="email" name="email" class="form-control" placeholder="Your Email" required><br>
                <textarea name="message" class="form-control" placeholder="Type your message here" rows="4" required></textarea><br>
                <input type="submit" class="btn" value="SEND MESSAGE">
            </form>
        </div>
        <?php
        endif;
        ?>
</div>
</section>
    
    <?php
    include "footer.php";
    ?>
</body>
</html>