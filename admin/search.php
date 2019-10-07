<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?>
<html>
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
            <center><u>Search</u></center><br>
           <center>
            <table>
                   <tr>
                  <form action="result.php" method="POST">
                        <td></td>
                        <td>
                              <input type="text" name="search" placeholder="Enter Name/ID no of Criminal...">
                        </td>
                        <td><input type="submit" name="btn" class="btn" value="Search"></td>
                  </form>
                  </tr>
            </table>
            
            	
            </center>
            	
            	
            	


            </div>
        </div>

		<div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

		</div>



	</div>
</body>
</html>