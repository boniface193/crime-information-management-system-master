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

            <div class="content">
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
            <center><u>Report</u></center><br>
          
                  
                  <center><table  width="40%" class='search'>
                   <tr style='background-color: #999999'>
                   <th>No</th><th>Id</th><th>Full Name</th><th>Age</th><th>View</th>
                   </tr>
                  <?php
                 include '../connect.php';

                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `criminal`");
                   while($query_run=mysql_fetch_array($query)){
                   $id=$query_run['IDno'];
                   $name1=$query_run['name'];
                   $age=$query_run['age'];

                  echo"<form action='viewResult.php' method='POST'>
                              <tr style='background-color:#CFCFCF'>
                                    <td></td>
                                    <td>$id</td>
                                    <td>$name1</td>
                                    <td>$age</td>
                                    <td><center><input type='submit' name='submit' value='View' class='input'></center></td>
                              </tr></form>";
                          }
                 
                if(isset($_POST['submit'])){
                        extract($_POST);

                        $query=mysql_query("SELECT * FROM `criminal` WHERE `name`='$name1' " );
                        echo $name1;

                       while($query_run=mysql_fetch_array($query)) {
                        $name1=$query_run['name'];
                        $ID=$query_run['IDno'];
                        $sex=$query_run['sex'];
                        $nick1=$query_run['nickname'];
                        $age=$query_run['age'];
                        $ocu=$query_run['occupation'];
                        $type=$query_run['crimetype'];
                        echo"<tr>   
                                    <td>Idno</td>
                                    <td>$ID</td>
                              </tr>
                              <tr>
                                    <td>Name</td>
                                    <td>$name1</td>
                              </tr>
                              <tr>
                                    <td>Nick name</td>
                                    <td>$nick1</td>
                              </tr>
                              <tr>
                                    <td>Sex</td>
                                    <td>$sex</td>
                              </tr>
                              <tr>
                                    <td>Age</td>
                                    <td>$age</td>
                              </tr>
                              <tr>
                                    <td>Occupation</td>
                                    <td>$ocu</td>
                              </tr>
                              <tr>
                                    <td>Crime type</td>
                                    <td>$type</td>
                              </tr>";
                     }

                  }
                ?>
                  <br>
                  <br>
                   
                   </table></center>
                   <br>
                   <br>
                   <br>

                   <table>
                   <?php

                  ?>
                  
                  </table>
                   


            </div>
        </div>

            <div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

            </div>



      </div>
</body>
</html>