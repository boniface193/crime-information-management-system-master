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
            <center><u>First Information Report (FIR)</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `fir` WHERE  `firno`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $firno=$query_run['firno'];
                   $date=$query_run['date'];
                   $adress=$query_run['address'];
                   $district=$query_run['district'];
                   $choose=$query_run['choose'];
                   $place=$query_run['place'];
                   $infotype=$query_run['infotype'];
                   $info=$query_run['info'];
                              echo "
                              
                              <tr style='background-color:#CFCFCF'>
                              <td>FIR No</td>
                                    <td>$firno</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Date</td>
                                    <td>$date</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Address</td>
                                    <td>$adress</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>District</td>
                                    <td>$district</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Choose</td>
                                    <td>$choose</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Place</td>
                                    <td>$place</td>
                              </tr>
                              <tr style='background-color:#CFCFCF'>
                              <td>Info Type</td>
                                    <td>$infotype</td>
                              </tr>
                              <tr style='background-color:#E7E7E7'>
                              <td>Info</td>
                                    <td>$info</td>
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