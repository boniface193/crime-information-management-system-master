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

		<div class="header">


            <img src="image/Logo.png" height="120px" width="900px">



		</div>

		<div class="content">
			<div class="menu">
				<table class="table">
					<tr>
                                    <td><a href="add.php">Add User</a></td>
                                    <td><a href="delete.php">Delete User</a></td>
					      
						<td><a href="search.php">Search</a></td>
						<td><a href="report.php">Report<a></td>
						<td><a href="logout.php">Logout</a></td>
                        
                        
						

					</tr>
				</table>
            </div><hr>
            <div class="area1">
            <center><u>Welcome Adminstrator</u></center><br>
            	
            	<divclass="registry">
            		




            	</div>
                
            	
            	
            	<?php
            	extract($_POST);
            	if (isset($btn)) {
            		require '../connect.php';
            		$date=date('Y.m.d');
            		$query=mysql_query("INSERT INTO `postmortem` VALUES ('','$name','$sex','$FirNo','$ResultMortem','$DateDeath','$info','$House','$Doctor')");
            		if (!empty($query)) {
            			echo "Postmortem Successfull Added...<br>";
            		}
            		else	
            		{
            			echo mysql_error();
            		}
            	}
            	else
            	{
            		echo mysql_error();
            	}
            	?>


            
        </div>

		<div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

		</div>



	</div>
</body>
</html>