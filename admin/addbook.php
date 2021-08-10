<?php
  include "connection.php";
  include "header1.php";
?>
<html>
<head>
  <title>Add Book</title>
  <link rel="stylesheet" type="text/css" href="addbook.css">
  </head>
  <body>
    <div class="srch" style="    padding-left: 730px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search" placeholder="search books.." required="" style="background-color: #1b203d; color: white;" >
                <button style="background-color: #f75f37; color: white;" type="submit" name="submit" class="btn btn-default">
                   <i class = "fa fa-search icons "></i>    
                </button>
        </form>
    </div>&nbsp;
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
   <br><br><br> 
   <div>
            <form class="book" action="" method="post">
        
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br>

        <button style="text-align: center;" class="btn btn-default" type="submit" name="add">ADD</button>
    </form>
    </div>
    <?php
    if(isset($_POST['add']))
    {
      if(isset($_SESSION['login_user']))
      {
        mysqli_query($db,"INSERT INTO books VALUES ('', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
        ?>
          <script type="text/javascript">
            alert("Book Added Successfully.");
          </script>

        <?php

      }
      else
      {
        ?>
          <script type="text/javascript">
            alert("You need to login first.");
          </script>
        <?php
      }
    }
?>
  </body>
</html>