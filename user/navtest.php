<?php
        include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color:#1b203d;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
}

.sidenav a {
  padding: 20px 20px 8px 40px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
  margin-top: 30px;
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color:#f75f37;
}

.sidenav .closebtn {
  position: absolute;
  top: 0px;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  cursor: pointer;
  color: #fff;
}

#main {
  transition: margin-left .5s;
  top: 0px;
}

@media screen and (max-height: 950px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.profile{
    display: inline-block;
    float: right;
    width: 160px;
}
.pro-img{
    float: left;
    width: 40px;
    margin-top: 5px;
  
}
.profile p{
    color: #f75f37;
    font-weight: 500;
    margin-left: 55px;
    margin-top: 10px;
    font-size: 13.5px;
}
.profile p span{
    font-weight: 400;
    font-size: 12px;
    display: block;
    color: #8e8b8b;
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <span class="closebtn" style="font-size: 30px" onclick="closeNav()">&#9776;</span><br>
  <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="costumers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Students</a>
  <a href="addbook.php"class="icon-a"><i class="fa fa-book icons"></i> &nbsp;&nbsp;Add Books</a>
  <a href="deletebook.php"class="icon-a"><i class="fa fa-thumbs-up icons"></i> &nbsp;&nbsp;Delete Books</a>
  <a href="request.php"class="icon-a"><i class="fa fa-thumbs-down icons"></i> &nbsp;&nbsp;Book Request</a>
  <a href="issue_info.php"class="icon-a"><i class="fa fa-address-card icons"></i> &nbsp;&nbsp;Issue Information</a>
  <a href="logout.php"class="icon-a"><i class="fa fa-ban icons"></i> &nbsp;&nbsp;Logout</a>
</div>

<div id="main">
 
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
    <div class="profile">

        <img src="../
        images/user1.png" class="pro-img" />&nbsp;&nbsp;
        <?php
        echo $_SESSION['login_user'];
        ?>
        <p><span>Admin</span></p>
    </div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 
