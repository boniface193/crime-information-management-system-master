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
            <center><u>Suspected People Report</u><table  class="t">
                   <tr style='background-color: #999999'>
                   </tr>
                  <?php
                        include '../connect.php';
                   $idd=$_GET['id'];
                   $query=mysql_query("SELECT * FROM `suspect` WHERE  `name`='$idd'");
                   $query_run=mysql_fetch_array($query);
                   $id=$query_run['id'];
                   $name=$query_run['name'];
                   $age=$query_run['age'];
                   $sex=$query_run['sex'];
                   $occupation=$query_run['occupation'];
                   $adress=$query_run['address'];
                   $h=$query_run['height'];
                   $w=$query_run['weight'];
                   $date=$query_run['date'];
                   $of=$query_run['officer'];
                   $remark=$query_run['remark'];
                            
                              echo "<tr style='background-color:#CFCFCF'>
                                         <td>Id</td>
                                         <td>$id</td>
                                    </tr>
                                    <tr style='background-color:#E7E7E7'>
                                         <td>Full Name</td>
                                         <td>$name</td>
                                    
                                    <tr style='background-color:#CFCFCF'>
                                    
                                          <td>Age</td>
                                          <td>$age</td>
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                   
                                          <td>Sex</td>
                                          <td>$sex</td>
                                    </tr>
                                    <tr style='background-color:#CFCFCF'>
                                   
                                          <td>Occupation</td>
                                          <td>$occupation</td>
                                   </tr>
                                   <tr style='background-color:#E7E7E7'>
                                   
                                          <td>Height</td>
                                          <td>$h</td>
                                   </tr>
                                   <tr style='background-color:#CFCFCF'>
                                   
                                          <td>Weight</td>
                                          <td>$w</td>
                                  </tr>
                                  <tr style='background-color:#E7E7E7'>
                                  
                                          <td>Remark</td>
                                          <td>$remark</td>
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