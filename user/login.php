<?php
    include "connection.php";
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login or Signup</title>
        <link rel="stylesheet" href="login.css">
        
    </head>
    <body>
        
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
                <form id="login" class="input-group" action="" method="post">
                    <input type="text" class="input-field" placeholder="Name" required name="name">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    
                    <div class="send-button">
                    <input type="submit" name="login"; value="Log In">
                </form>
                    </div>
                <form id="signup" class="input-group" action="" method="POST">
                    <input type="text" class="input-field" placeholder="Username" required  name="name">
                    <input type="Email" class="input-field" placeholder="Email" required name="email">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="text" Name="roll" class="input-field" placeholder="Roll Number" required="">
                    <input type="text" Name="phone" class="input-field" placeholder="Phone Number" required>
                <br>
                    <input type="checkbox" class="check-box"><span><a href="terms.html">I agree to the terms and conditions</a></span>
                    <div class="send-button">
                    <input type="submit" name="signup"; value="Sign Up">
                    </div>
                </form>
                <div>
            <img src="../images/logo1.jpg" class="logo">
        </div>
         <div class="footer">
        <p> &copy; 2021 Hamro Library Member Login. All Rights Reserved </a></p>
        
    </div>
            </div>

        </div>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            var z = document.getElementById("btn");
            var a = document.getElementById("log");
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

        $sql="SELECT name from `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['name']==$_POST['name'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `STUDENT` VALUES('','$_POST[name]', '$_POST[email]', '$_POST[password]', '$_POST[roll]', '$_POST[phone]',  'p.jpg');");
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
      $res=mysqli_query($db,"SELECT * FROM `student` WHERE name='$_POST[name]' && password='$_POST[password]';");
      
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
        $_SESSION['login_user'] = $_POST['name'];
        

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