<?php
  include "connection.php";
  include "header1.php";
?>
<html>
<head>
  <title>Book Request</title>
  <link rel="stylesheet" type="text/css" href="">
 <style>
   .srch{
    margin: 10px;
    float: right;
   }
   .form-control{
    background: transparent;
    padding: 10px;
    margin: 20px;
   } 
   .btn{
    width: 100px;
    margin-left: 50px;
    background: #f75f37;
    color: white;
   }
   .table{
margin-left: 10px;
background:  #272c4a;
width: 100%;
}
.table th{
    padding : 10px;
    margin: 10px;
    font-size: 20px;
}
.table td{
  padding : 10px;
    margin: 10px;
    font-size: 15px;
    color: white;
}
body h2{
  text-align: center;
  color: #fff;
  font-family: system-ui;
}
 </style>
  </head>
  <body>
    <div class="container">
  <div class="srch">
    <br>
    <form method="post" action="" name="form1">
      <input type="text" name="username" class="form-control" placeholder="Username" required=""><br>
      <input type="text" name="bid" class="form-control" placeholder="BID" required=""><br>
      <button class="btn btn-default" name="submit" type="submit">Submit</button><br>
    </form>
  </div>
  <br><br>
  <h2 style="text-align: center;">Request of Book</h2>

  <?php
  
  if(isset($_SESSION['login_user']))
  {
    $sql= "SELECT student.username,roll,books.bid,name,authors,edition,status FROM student inner join issue_book ON student.username=issue_book.username inner join books ON issue_book.bid=books.bid WHERE issue_book.approve =''";
    $res= mysqli_query($db,$sql);

    if(mysqli_num_rows($res)==0)
      {
        echo "<h2><b>";
        echo "There's no pending request.";
        echo "</h2></b>";
      }
    else
    {
      echo "<table class='table table-bordered' >";
      echo "<tr style='background-color: #f75f37;'>";
        
        echo "<th>"; echo "Username";  echo "</th>";
        echo "<th>"; echo "Roll No";  echo "</th>";
        echo "<th>"; echo "BID";  echo "</th>";
        echo "<th>"; echo "Book Name";  echo "</th>";
        echo "<th>"; echo "Authors Name";  echo "</th>";
        echo "<th>"; echo "Edition";  echo "</th>";
        echo "<th>"; echo "Status";  echo "</th>";
        
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row['username']; echo "</td>";
        echo "<td>"; echo $row['roll']; echo "</td>";
        echo "<td>"; echo $row['bid']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['authors']; echo "</td>";
        echo "<td>"; echo $row['edition']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        
        echo "</tr>";
      }
    echo "</table>";
    }
  }
  else
  {
    ?>
    <br>
      <h4 style="text-align: center;color: yellow;">You need to login to see the request.</h4>
      
    <?php
  }

  if(isset($_POST['submit']))
  {
    $_SESSION['username']=$_POST['username'];
    $_SESSION['bid']=$_POST['bid'];

    ?>
      <script type="text/javascript">
        window.location="approve.php"
      </script>
    <?php
  }

  ?>
  </div>
</div>
</body>
</html>