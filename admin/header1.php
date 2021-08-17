<?php
session_start();
?>
<!Doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="header1.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>H</span>amro Library</p>
  <a href="index.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="costumers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Students</a>
  <a href="addbook.php"class="icon-a"><i class="fa fa-book icons"></i> &nbsp;&nbsp;Books</a>
  <a href="request.php"class="icon-a"><i class="fa fa-thumbs-down icons"></i> &nbsp;&nbsp;Book Request</a>
  <a href="issue_info.php"class="icon-a"><i class="fa fa-address-card icons"></i> &nbsp;&nbsp;Issue Information</a>
  <a href="logout.php"class="icon-a"><i class="fa fa-ban icons"></i> &nbsp;&nbsp;Logout</a>

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; </span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; </span>
</div>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

    $(".nav").click(function(){
      $("#mySidenav").css('width','70px');
       $("#mySidenav").css('height','100%');
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
       $("#mySidenav").css('height','100%');
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