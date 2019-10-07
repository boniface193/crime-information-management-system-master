<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
<head>
<title>
 Crime Information Management System
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <div class="wrapper">

            <div class="header"> <img src="image/Logo.png" height="120px" width="900px">



            </div>

            <div class="content21">
                  <div class="menu">
                        <table class="table">
                              <tr> 
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
                                   
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="report.php">Report</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                                   

                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Most Wanted Report</u>
            <table  >
                  <?php
                   include '../connect.php';
                   $idd=$_GET['id'];
                    $query=mysql_query("SELECT * FROM `wanted` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                    $photo1=$query_run['image'];
                    
                    echo"<tr><td><img src='../upload/".$photo1."' id='tb'></td></tr>";


                  ?>
                 

             </table>
             <table class="t">
                  <?php
                        include '../connect.php';

                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `wanted` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $ido=$query_run['IDno'];
                   $name=$query_run['name'];
                   $nickname=$query_run['nickname'];
                   $age=$query_run['age'];
                   $sex=$query_run['sex'];
                   $place=$query_run['location'];
                   $Descr=$query_run['description'];
                  
                  
                             
                              
                               echo "<tr style='background-color:#CFCFCF'>
                              <td>Id</td>
                                    <td>$ido</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Full Name</td>
                                    <td>$name</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Nickname</td>
                                    <td>$nickname</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Age</td>
                                    <td>$age</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Sex</td>
                                    <td>$sex</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Place</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Description</td>
                                    <td>$Descr</td>
                              </tr>";
                  ?>
                   </table>
                   <button onclick="window.print()" class="print">print</button>

                 </center>


            </div>
        </div>

            <div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

            </div>



      </div>
</body>
</html>