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
	include "Header.php";
?>
<html>
	<head>
		<title>Contact us</title>
		<link rel="stylesheet" type="text/css" href="contact.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>
</div>
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
			<h1>Hello</h1>
			<h2>We are always ready to help you!</h2>
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

