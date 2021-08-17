<?php
  include "connection.php";
  include "header.php";
?>
<html>
<head>
  <title>Book Request</title>
  <link rel="stylesheet" type="text/css" href="">
  </head>
  <body>
    <?php
  if(isset($_SESSION['login_user']))
    {
      $q=mysqli_query($db,"SELECT * from issue_book where username='$_SESSION[login_user]' and approve='' ;");

      if(mysqli_num_rows($q)==0)
      {
        echo "There's no pending request";
      }
      else
      {
    echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #f75f37;'>";
        //Table header
        
        echo "<th>"; echo "Book-ID";  echo "</th>";
        echo "<th>"; echo "Approve Status";  echo "</th>";
        echo "<th>"; echo "Issue Date";  echo "</th>";
        echo "<th>"; echo "Return Date";  echo "</th>";
        
      echo "</tr>"; 

      while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr>";
        echo "<td>"; echo $row['bid']; echo "</td>";
        echo "<td>"; echo $row['approve']; echo "</td>";
        echo "<td>"; echo $row['issue']; echo "</td>";
        echo "<td>"; echo $row['return']; echo "</td>";
        
        echo "</tr>";
      }
    echo "</table>";
      }
    }
    else
    {
      echo "</br></br></br>"; 
      echo "<h2><b>";
      echo " Please login first to see the request information.";
      echo "</b></h2>";
    }
    ?>
  </div>
</div>
</body>
</html>