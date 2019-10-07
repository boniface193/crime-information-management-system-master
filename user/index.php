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
            <center><u>Add Complain Status</u></center><br>
            	
            		<form action="index.php" method="POST" class="form1">
            	<center><table class="table1">
            		<tr>
            			<td>ID No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            			<input type="text" name="IDno" class="input" placeholder="ID..." >
                        </td>
                        
            			<td>Full Name&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="name" class="input" placeholder="Full Name..." >
            		</tr>
            		<tr>
            			<td>Sex     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <select name="sex">
                                          <option></option>
                                          <option>Male</option>
                                          <option>Female</option>

                                    </select>
                                    
			  </td>
            			<td>Address  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="adress" class="input" placeholder="Address..." >
                                    &nbsp;&nbsp;&nbsp;
			  </td>
            		</tr>
            		<tr>
            			<td>Phone No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="text" name="phone" class="input" placeholder="Phone Number...">
			            </td>
            			<td>Occupation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <input type="text" name="occupation" class="input" placeholder="Occupation...">
                              </td>
            		
            	</table>
            </center>
                         <br>

			  <center>Complain<br><textarea class="textarea1" placeholder="Add Coplain..." name="complain"></textarea></center> 
			<center>
			<br>
			<input type="submit" name="btn" class="btn" value="Add"></center>
            	</form>
            	
            	
            	<?php

            	extract($_POST);
            	if (isset($btn)&&!empty($IDno)&&!empty($name)&&!empty($sex)&&!empty($adress)&&!empty($phone)&&!empty($occupation)&&!empty($complain))
                   {
            		require '../connect.php';
            		$date=date('Y.m.d');
            		$query=mysql_query("INSERT INTO `complain` VALUES ('','$IDno','$name','$sex','$adress','$phone','$occupation','time()','$date','$complain')");
            		if (!empty($query)) {
            			echo "Complain is Succesiful Added<br>";
            		}
            		else	
            		{
            			echo mysql_error();
            		}
            	}
                  elseif (isset($btn)&&empty($IDno)||empty($name)||empty($sex)||empty($adress)||empty($phone)||empty($occupation)||empty($complain))
                        {
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