<?php
   include"connection.php"; 
   include "Header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="book.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

</head>
<body>
   <div class="srch" style="    padding-left: 770px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="search" placeholder="search books.." required="" style="background-color: #1b203d; color: white;" >
                <button style="background-color: #f75f37; color: white;" type="submit" name="submit" class="btn btn-default">
                   <i class = "fa fa-search icons "></i>    
                </button>
        </form>
    </div>&nbsp;
    <div class="srch" style="    padding-left: 770px;">
        <form class="navbar-form" method="post" name="form1">
            
                <input class="form-control" type="text" name="bid" placeholder="Enter Book ID" required="" style="background-color:#1b203d; color: white;">
                <button style="background-color: #f75f37; color: white;" type="submit" name="submit1" class="btn btn-default">Request
                </button>
        </form>
    </div>
    <h2>List Of Books</h2>
    <?php

        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT * from books where name like '%$_POST[search]%' ");

            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No book found. Try searching again.";
            }
            else
            {
        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: #f75f37;'>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Status";  echo "</th>";
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

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
            $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`bid` ASC;");

        echo "<table class='table table-bordered table-hover' >";
            echo "<tr style='background-color: #f75f37;'>";
                //Table header
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book-Name";  echo "</th>";
                echo "<th>"; echo "Authors Name";  echo "</th>";
                echo "<th>"; echo "Edition";  echo "</th>";
                echo "<th>"; echo "Status";  echo "</th>";
                echo "<th>"; echo "Quantity";  echo "</th>";
                echo "<th>"; echo "Department";  echo "</th>";
            echo "</tr>";   

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

        if(isset($_POST['submit1']))
        {
            if(isset($_SESSION['login_user']))
            {
                mysqli_query($db,"INSERT INTO issue_book Values('$_SESSION[login_user]', '$_POST[bid]', '', '', '');");
                ?>
                    <script type="text/javascript">
                        window.location="request.php"
                    </script>
                <?php
            }
            else
            {
                ?>
                    <script type="text/javascript">
                        alert("You must login to Request a book");
                    </script>
                <?php
            }
        }

    ?>
</div>
</body>
</html>