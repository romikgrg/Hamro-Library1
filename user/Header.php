<?php
session_start();
?>
<!Doctype HTML>
<html>
<head>
	<title>HAMRO LIBRARY</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>

	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>H</span>amro Library</p>
  <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="book.php"class="icon-a"><i class="fa fa-book icons"></i> &nbsp;&nbsp;Books</a>
  <a href="issue_info.php"class="icon-a"><i class="fa fa-address-card icons"></i> &nbsp;&nbsp;Issue Information</a>
  <a href="contact.php"class="icon-a"><i class="fa fa-envelope-square icons"></i> &nbsp;&nbsp;Contact</a>
  <a href="logout.php"class="icon-a"><i class="fa fa-ban icons"></i> &nbsp;&nbsp;Logout</a>


</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
<div class="profile">

    <img src="../images/user.png" class="pro-img" />&nbsp;&nbsp;
    <?php
    echo $_SESSION['login_user'];
    ?>
    <p><span>User</span></p>
  </div>
	
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>




















  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    $(".nav").click(function(){
      $("#mySidenav").css('width','70px');
      $("#main").css('margin-left','70px');
      $(".logo").css('visibility', 'hidden');
      $(".logo span").css('visibility', 'visible');
       $(".logo span").css('margin-left', '-10px');
       $(".icon-a").css('visibility', 'hidden');
       $(".icons").css('visibility', 'visible');
       $(".icons").css('margin-left', '-8px');
        $(".nav").css('display','none');
        $(".nav2").css('display','block');
    });

  $(".nav2").click(function(){
      $("#mySidenav").css('width','300px');
      $("#main").css('margin-left','300px');
      $(".logo").css('visibility', 'visible');
       $(".icon-a").css('visibility', 'visible');
       $(".icons").css('visibility', 'visible');
       $(".nav").css('display','block');
        $(".nav2").css('display','none');
   });

  </script>

  </body>


  </html>
