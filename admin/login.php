<?php
include "connection.php";
session_start();
?>
<html>
<title>
    Hamro Library
</title>
<link rel="stylesheet" type="text/css" href="login1.css">
<body>
<div class="navbar">
    <label class="logo"><a class = "b" href="../home.php"><span>H</span>amro Library</a></label>
    <ul class="nav">
<li><a  href="../home.php">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="../about.php">About Us</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="../user/login.php">Login/Signup</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  class="active" href="login.php">Admin</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="contact.php">Contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>

</div>
<br>

 <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toogle-btn" onclick="login()">Log In</button>
                       
                </div>
                 <div class="social-icons">
                    <img src="../images/fb.png">
                    <img src="../images/tw.png">
                    <img src="../images/gp.png">
                </div> 
                 <form id="login" class="input-group" action="" method="post">&nbsp;

                    <input type="text" class="input-field " placeholder="Username" required name="username">&nbsp;

                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">&nbsp;

                    <input type="checkbox" class="check-box"><p class="rm">Remember Password</p>&nbsp;
                    
                    <div class="send-button">
                    <input type="submit" name="login"; value="Log In">&nbsp;
                </form>
                 </div>
                <div>
            <img src="../images/logo1.jpg" class="logo1">
        </div>
         <div>
        <p  class="footer"> &copy; 2021 Hamro Library Member Login. All Rights Reserved </a></p>
    </div>
            </div>

        
        <script>
            var x = document.getElementById("login");
            var z = document.getElementById("btn");
            
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }
        </script>
        

<?php

    if(isset($_POST['login']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
      $row= mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
         <script type="text/javascript">
           alert("Invalid username or Password");
          </script>
            
        <?php
      }
      else
      {
         $_SESSION['login_user'] = $_POST['username'];
        

        ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
        <?php
      }
    }

  ?>
</body>
</html>