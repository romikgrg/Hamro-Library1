<?php
include "Header.php";
?>
<!Doctype HTML>
<html>
<head>
	<title>HAMRO LIBRARY</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
	
	
	
	<div class="col-div-3">
		<div class="box">
			<p>150<br/><span>Customers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>120<br/><span>Books</span></p>
			<i class="fa fa-book box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>100<br/><span>Returned</span></p>
			<i class="fa fa-thumbs-up box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>20<br/><span>Not Returned</span></p>
			<i class="fa fa-thumbs-down box-icon"></i>
		</div>
	</div>
	<div class="clearfix"></div>
	<br/><br/>
	<div class="col-div-8">
		<div class="box-8">
		<div class="content-box">
			<p>Top Selling Books </p>
			<br/>
			<table>
  <tr>
    <th>Name</th>
    <th>Author</th>
    <th>Category</th>
  </tr>
  <tr>
    <td>ULYSSES</td>
    <td>James Joyce</td>
    <td>Novel</td>
  </tr>
  <tr>
    <td>Steve Jobs</td>
    <td>Good reads</td>
    <td>Biography</td>
  </tr>
  <tr>
    <td>A History of the Twentieth Century </td>
    <td>Martin Gilbert</td>
    <td>History</td>
  </tr>
  <tr>
    <td>The Hare</td>
    <td>Melanie Finn</td>
    <td>Fiction</td>
  </tr>
  
  
</table>
		</div>
	</div>
	</div>

	<div class="col-div-4">
		<div class="box-4">
		<div class="content-box">
			<p>Customer Satisfaction</p>

			<div class="circle-wrap">
    <div class="circle">
      <div class="mask full">
        <div class="fill"></div>
      </div>
      <div class="mask half">
        <div class="fill"></div>
      </div>
      <div class="inside-circle"> 70% </div>
    </div>
  </div>
		</div>
	</div>
	</div>
		
	<div class="clearfix"></div>
</div>


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
