<?php
  include "connection.php";
  include "header1.php";
?>
<html>
<head>
  <title>Add Book</title>
  <link rel="stylesheet" type="text/css" href="#">
  <style>
   *{
    font-family: system-ui;
   }
    .book{
  float: center;
}
.formbox{
  height : 500px;
  background-color: #272c4a;
  margin-left: 70px;
  float: center;

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
}
.form-control{
  background: transparent;
  width: 250px;
  height: 30px;
  color: white;
  padding-left: 150px;
  margin-left: 300px;
  margin-top: 20px;
}
body h2{
  text-align: center;
  color: #fff;
  font-family: system-ui;
}
.btn1{
  margin-left: 450px;
  background: #f75f37;
  color: #fff;
}
  </style>
  </head>
  <body>

    <div class="srch" style="    padding-left: 550px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control1" type="text" name="search" placeholder="search books.." required="" style="background-color: #1b203d; color: white;" >
                <button style="background-color: #f75f37; color: white;" type="submit" name="submit" class="btn btn-default">
                   <i class = "fa fa-search icons "></i>    
                </button>
        </form>
    </div>&nbsp;
     <div class="srch" style="    padding-left: 550px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control1" type="text" name="bid" placeholder="Enter Book ID" required="" style="background-color:#1b203d; color: white;">
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
      echo "<tr style='background-color: #f75f37; '>";
        echo "<th>";  echo "ID" ;echo "</th>";
        echo "<th>";  echo "Book-Name" ;echo "</th>";
        echo "<th>";  echo "Author-Name" ;echo "</th>";
        echo "<th>";  echo "Edition" ;echo "</th>";
        echo "<th>";  echo "Status" ;echo "</th>";
        echo "<th>";  echo "Quantity" ;echo "</th>";
        echo "<th>";  echo "Department" ;echo "</th>";
    echo"</tr>"; 
    while($row=mysqli_fetch_assoc($q))
      {
        echo "<tr style=' color:#fff;'>";
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

      
       echo "<table class='table' >";
      echo "<tr style='background-color: #f75f37; '>";
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
        echo "<tr style='color:#fff;'>";
        echo "<td >"; echo $row['bid']; echo "</td>";
        echo "<td >"; echo $row['name']; echo "</td>";
        echo "<td >"; echo $row['authors']; echo "</td>";
        echo "<td >"; echo $row['edition']; echo "</td>";
        echo "<td >"; echo $row['status']; echo "</td>";
        echo "<td >"; echo $row['quantity']; echo "</td>";
        echo "<td >"; echo $row['department']; echo "</td>";

        echo "</tr>";
      } 
      
    echo "</table>"; 
     echo "</div>";

}
   ?> 
   <br><br><br> 
   <h2>Add Book</h2>
   <div class="formbox">
            <form class="book" action="" method="post">
        
        <input type="text" name="name" class="form-control" placeholder="Book Name" required=""><br><br>
        <input type="text" name="authors" class="form-control" placeholder="Authors Name" required=""><br><br>
        <input type="text" name="edition" class="form-control" placeholder="Edition" required=""><br><br>
        <input type="text" name="status" class="form-control" placeholder="Status" required=""><br><br>
        <input type="text" name="quantity" class="form-control" placeholder="Quantity" required=""><br><br>
        <input type="text" name="department" class="form-control" placeholder="Department" required=""><br><br>

        <button style="text-align: center;" class="btn1 btn-default" type="submit" name="add">ADD</button>
    </form>
    
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
</div>
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
  </body>
</html>