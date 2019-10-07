<?php
session_start();
if (empty($_SESSION['usertypeu']))
{
       header("location: ../index.php");
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

            <div class="header"><img src="image/Logo.png" height="120px" width="900px">



            </div>

            <div class="content">
                  <div class="menu">
                        <table class="table">
                              <tr>
                                    <td><a href="index.php">Coplain status</a></td>
                                    <td><a href="firReport.php">FIR</a></td>
                                    <td><a href="criminalform.php">Criminal Registration</a></td>
                                    <td><a href="postmortem.php">PostMortem</a></td>
                                    <td><a href="wanted.php">Most Wanted</a></td>
                                    <td><a href="suspect.php">Suspects</a></td>
                                    <td><a href="search.php">Search</a></td>
                                    <td><a href="logout.php">Logout</a></td>
                              </tr>
                        </table>
            </div><hr>
            <div class="area1">
            <center><u>Add Suspected People</u></center>
                  
                  <form action="suspect.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                        <tr>
                              <td>Full Name</td>
                              <td>
                                    <input type="name" name="name" placeholder="Full Name...">
                              </td>
                        </tr>
                        <tr>
                              <td>Age</td>
                              <td>
                                    <input type="age" name="age" placeholder="Age...">
                              </td>
                        </tr>
                        <tr>
                              <td>Sex</td>
                              <td>
                                    <select name="sex" placeholder="Sex...">
                                          <option></option>
                                          <option value="Male">Male</option>
                                          <option value="Female">Femal</option>
                                    </select>
                              </td>
                        </tr>
                        <tr>
                              <td>Occupation</td>
                              <td>
                                    <input type="text" name="occupation" placeholder="Occupation...">
                              </td>
                        </tr>
                        <tr>
                              <td>Address</td>
                              <td>
                                    <input type="address" name="address" placeholder="Address...">
                              </td>
                        </tr>
                        <tr>
                              <td>Height</td>
                              <td>
                                    <input type="number" name="height" placeholder="Height...">
                              </td>
                        </tr>
                        <tr>
                              <td>Weight</td>
                              <td>
                                    <input type="number" name="weight" placeholder="Weight...">
                                    
                              </td>
                        </tr>
                        <tr>
                              <td>Officer in Charge</td>
                              <td>
                                    <input type="text" name="officer" placeholder="Officer in Charge...">
                                    
                              </td>
                        </tr>
                        <tr>
                              <td>Arrest Date</td>
                              <td>
                                    <input type="text" name="arrestdate" placeholder="Arrest Date...">
                                    
                              </td>
                        </tr>
                        <tr>
                              <td>Remack</td>
                              <td>
                                   <textarea class="textarea4" placeholder="Add Comment..." name="remack"></textarea>
                                    
                              </td>
                        </tr>
                  </table> 
                  <input type="submit" name="btn" class="btn" value="Add"></center>
                  </center>
                  
                  </form>
                  
                  
                  <?php
                  extract($_POST);
                   if (isset($btn)&&!empty($name)&&!empty($age)&&!empty($sex)&&!empty($occupation)&&!empty($address)&&!empty($height)&&!empty($weight)&&!empty($officer)&&!empty($remack)) 
                   {
                        require '../connect.php';
                        $date=date('Y.m.d');
                        $query=mysql_query("INSERT INTO `suspect` VALUES ('','$name','$age','$sex','$occupation','$address','$height','$weight','time()','$date','$officer','$remack')");
                        if (!empty($query)) {
                              echo "suspect Successful Added<br>";
                        }
                        else  
                        {
                              echo mysql_error();
                        }
                  }
                  if (isset($btn)&&empty($name)||empty($age)||empty($sex)||empty($occupation)||empty($address)||empty($height)||empty($weight)||empty($officer)||empty($remack)) {
                        echo "all figure required";
                  }
                  else
                  {
                        echo mysql_error();
                  }
                  ?>


            </div>
        </div>

            <div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

            </div>



      </div>
</body>
</html>