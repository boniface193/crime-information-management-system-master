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
            <center><u>Postmortem Report</u></center><br>
          
                  
                  <center><table width="40%" class='search'>
                   <tr style='background-color: #999999'>
                        <th>No</th><th>FirNo</th><th>Full Name</th><th>Sex</th><th>Date of Death</th><th>View</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `postmortem`");
                   $count=0;
                   while($query1=mysql_fetch_array($query)){
                   $firno=$query1['FirNo'];
                   $name=$query1['name'];
                   $sex=$query1['sex'];
                   $date=$query1['DateDeath'];
                   $count++;

                  echo"<tr style='background-color:#CFCFCF'>
                              
                                                      <td><center>$count</center></td>
                                                      <td><center>$firno</center></td>
                                                      <td><center>$name<center></td>
                                                      <td><center>$sex</center></td>
                                                      <td><center>$date</center></td>
                                                      <td><center><form action='viewPostmortemReport.php?id=$name' method='POST'><button class='input' value='$id'>View</button></form></center></td>
                                    
                        </tr>";
                  
                  }
                  ?>
                   </table></center>


            </div>
        </div>

            <div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

            </div>



      </div>
</body>
</html>