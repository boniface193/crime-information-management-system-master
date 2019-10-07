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
            <center><u>First Information Report (FIR)</u></center><br>
          
                  
                  <center><table  width="40%" class='search'>
                   <tr style='background-color: #999999'>
                   <th>No</th><th>FIRNo</th><th>Informal Address</th><th>District</th><th>View</th>
                   </tr>

                  <?php
                   include '../connect.php';
                   $query=mysql_query("SELECT * FROM `fir`");
                   $count=0;
                   while($query_run=mysql_fetch_array($query)){
                   $firno=$query_run['firno'];
                   $address=$query_run['address'];
                   $district=$query_run['district'];
                   $count++;

                  echo"<tr style='background-color:#CFCFCF'>
                              
                                                      <td><center>$count</center></td>
                                                      <td><center>$firno</center></td>
                                                      <td><center>$address</center></td>
                                                      <td><center>$district</center></td>
                                                      <td><center><form action='viewfirReport.php?id=$firno' method='POST'><button class='input' value='$id'>View</button></form></center></td>
                                
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