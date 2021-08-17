<?php
include "connection.php";
session_start();
?>
<html>
<title>
    Hamro Library
</title>
<link rel="stylesheet" type="text/css" href="login.css">
<body>
<div class="navbar">
    <label class="logo"><a class = "b" href="../home.php"><span>H</span>amro Library</a></label>
    <ul class="nav">
<li><a  href="../home.php">Home</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="../about.php">About Us</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  class="active" href="user/login.php">Login/Signup</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="../admin/login.php">Admin</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
<li><a  href="contact.php">Contact</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
</ul>

</div>
<br>

 <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                        <button type="button" class="toogle-btn" onclick="login()">Log In</button>
                        <button type="button" class="toogle-btn" onclick="signup()">Sign Up</button>
                       
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
                <form id="signup" class="input-group" action="" method="POST">
                    <input type="text" class="input-field" placeholder="Username" required  name="username">
                    <input type="Email" class="input-field" placeholder="Email" required name="email">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="text" Name="roll" class="input-field" placeholder="Roll Number" required="">
                    <input type="text" Name="phone" class="input-field" placeholder="Phone Number" required>
                <br>
                    <input type="checkbox" class="check-box1"><p class="terms">I agree to the terms and conditions</p>
                    <div class="send-button">
                    <input type="submit" name="signup"; value="Sign Up">
                    </div>
                </form>
                <div>
            <img src="../images/logo1.jpg" class="logo1">
        </div>
         <div>
        <p  class="footer"> &copy; 2021 Hamro Library Member Login. All Rights Reserved </a></p>
    </div>
            </div>

        
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            var z = document.getElementById("btn");
            function signup(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }
            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }
        </script>
        

<?php

      if(isset($_POST['signup']))
      {
        $count=0;

        $sql="SELECT username from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('','$_POST[username]', '$_POST[email]', '$_POST[password]', '$_POST[roll]', '$_POST[phone]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>
<?php

    if(isset($_POST['login']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
      
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