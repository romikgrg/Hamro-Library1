<?php
	include "connection.php";
	include "header1.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Approve Request</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">

		.srch
		{
			padding-left: 850px;

		}
		.form-control
		{
			width: 300px;
			height: 45px;
			background-color:#272c4a;
			color: white;
		}
		
		body {
			background:#1b203d; 
  	font-family: "Lato", sans-serif;
  	transition: background-color .5s;
}

.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
.container
{
	height: 600px;
	background-color:#272c4a;
	opacity: .8;
	color: white;
}
.Approve
{
  margin-left: 420px;
}
.btn{
  background: #f75f37;
  color: white;
  margin-left:100px;
  padding: 10px 20px; 
}

	</style>

</head>
<body>
	 <div class="container">
    <br><h3 style="text-align: center;">Approve Request</h3><br><br>
    
    <form class="Approve" action="" method="post">
        <input class="form-control" type="text" name="approve" placeholder="Yes or No" required=""><br><br>

        <input type="text" name="issue" placeholder="Issue Date yyyy-mm-dd" required="" class="form-control"><br><br>

        <input type="text" name="return" placeholder="Return Date yyyy-mm-dd" required="" class="form-control"><br><br>
        <button class="btn btn-default" type="submit" name="submit">Approve</button>
    </form>
  
  </div>
</div>

<?php
  if(isset($_POST['submit']))
  {
    mysqli_query($db,"UPDATE  `issue_book` SET  `approve` =  '$_POST[approve]', `issue` =  '$_POST[issue]', `return` =  '$_POST[return]' WHERE username='$_SESSION[username]' and bid='$_SESSION[bid]';");

    mysqli_query($db,"UPDATE books SET quantity = quantity-1 where bid='$_SESSION[bid]' ;");

    $res=mysqli_query($db,"SELECT quantity from books where bid='$_SESSION[bid];");

    while($row=mysqli_fetch_assoc($res))
    {
      if($row['quantity']==0)
      {
        mysqli_query($db,"UPDATE books SET status='not-available' where bid='$_SESSION[bid]';");
      }
    }
    ?>
      <script type="text/javascript">
        alert("Updated successfully.");
        window.location="request.php"
      </script>
    <?php
  }
?>
</body>
</html>