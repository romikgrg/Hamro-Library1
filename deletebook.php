<?php
  include "connection.php";
  include "header1.php";
?>
<html>
<head>
  <title>Delete Book</title>
  <link rel="stylesheet" type="text/css" href="addbook.css">
  </head>
  <body>
    <div class="srch" style="    padding-left: 700px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search" placeholder="search books.." required="" style="background-color: #1b203d; color: white;" >
                <button style="background-color: #f75f37; color: white;" type="submit" name="submit" class="btn btn-default">
                   <i class = "fa fa-search icons "></i>    
                </button>
        </form>
    </div>&nbsp;
     <div class="srch" style="    padding-left: 700px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="" style="background-color:#1b203d; color: white;">
                <button style="background-color: #f75f37; color: white;" type="submit" name="delete" class="btn btn-default">Delete Book
                </button>
        </form>
    </div>
     <h2>List Of Books</h2>
     <?php

if(isset($_POST['search']))
{
   $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' "); 

   if(mysqli_num_rows($q)==0)
   {
     echo " Sorry No Books Found,Try Searching Again.";
   }
   else
   {
     echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #f75f37;'>";
        echo "<th>";  echo "ID" ;echo "</th>";
        echo "<th>";  echo " Book-Name" ;echo "</th>";
        echo "<th>";  echo "Author-Name" ;echo "</th>";
        echo "<th>";  echo "Edition" ;echo "</th>";
        echo "<th>";  echo "Status" ;echo "</th>";
        echo "<th>";  echo "Quantity" ;echo "</th>";
        echo "<th>";  echo "Department" ;echo "</th>";
    echo"</tr>"; 
    while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr>";
        echo "<td>"; echo $row['bid']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['authors']; echo "</td>";
        echo "<td>"; echo $row['edition']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
        echo "<td>"; echo $row['department']; echo "</td>";

        echo "</tr>";
      }
    echo "</table>";
   }
}
else
{
  
       $res=mysqli_query($db,"SELECT * FROM `books`ORDER BY `books`.`bid`;");

       echo "<table class='table table-bordered table-hover' >";
      echo "<tr style='background-color: #f75f37;'>";
        echo "<th>";  echo "ID" ;echo "</th>";
        echo "<th>";  echo " Book-Name" ;echo "</th>";
        echo "<th>";  echo "Author-Name" ;echo "</th>";
        echo "<th>";  echo "Edition" ;echo "</th>";
        echo "<th>";  echo "Status" ;echo "</th>";
        echo "<th>";  echo "Quantity" ;echo "</th>";
        echo "<th>";  echo "Department" ;echo "</th>";
    echo"</tr>"; 
    while($row=mysqli_fetch_assoc($res))
      {
        echo "<tr>";
        echo "<td>"; echo $row['bid']; echo "</td>";
        echo "<td>"; echo $row['name']; echo "</td>";
        echo "<td>"; echo $row['authors']; echo "</td>";
        echo "<td>"; echo $row['edition']; echo "</td>";
        echo "<td>"; echo $row['status']; echo "</td>";
        echo "<td>"; echo $row['quantity']; echo "</td>";
        echo "<td>"; echo $row['department']; echo "</td>";

        echo "</tr>";
      } 
    echo "</table>"; 

}
   ?> 
<?php
    if(isset($_POST['delete']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"DELETE from books where bid = '$_POST[bid]'; ");
        ?>
          <script type="text/javascript">
            alert("Delete Successful.");
          </script>
        <?php
      }
      else
      {
              ?>
          <script type="text/javascript">
            alert("Please Login First.");
          </script>
        <?php
      }
    }
    

  ?>