<?php
    include "connection.php";
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
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
                <form id="login" class="input-group" action="" method="post">
                    <input type="text" class="input-field" placeholder="Username" required name="username">
                    <input type="password" class="input-field" placeholder="Enter Password" required name="password">
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    
                    <div class="send-button">
                    <input type="submit" name="login"; value="Log In">
                </form>
                    </div>
                
                <div>
            <img src="../images/logo1.jpg" class="logo">
        </div>
         <div class="footer">
        <p> &copy; 2021 Hamro Library Member Login. All Rights Reserved </a></p>
        
    </div>
            </div>

        </div>
        

        }

      }

    ?>
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
        $_SESSION['pic']= $row['pic'];

        ?>
          <script type="text/javascript">
            window.location="index.php";
          </script>
        <?php
      }
    }

  ?>

    </body>
</html>