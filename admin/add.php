
<?php
session_start();
if (empty($_SESSION['usertypea'])) {
      header("Location: ../index.php");
}
?><html>
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
            <center><u>Add User</u></center>
                  
               <center>  
                  <form action="add.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr>
                              <td>User Id</td>
                              <td>
                                    <input type="text" name="username" placeholder="Enter User Id...">
                              </td>
                        </tr>
                         <tr>
                              <td>Type of User</td>
                              <td>
                                    <select name="usertype">
                                          <option></option>
                                          <option>admin</option>
                                          <option>user</option>
                                    </select>
                                     
                              </td>

                        </tr>
                        <tr>
                              <td>Password</td>
                              <td>
                                    <input type="password" name="password" placeholder="Enter Password">
                              </td>
                        </tr>

                        
                  </table> <br>
                  <input type="submit" name="btn" class="btn" value="Add User"></center>
                  </center>
                  
                  </form>
                  </center> 
                  
            	
            	<?php
            	extract($_POST);
            	if (isset($btn)) {
            		require '../connect.php';
            		$query=mysql_query("INSERT INTO `login` VALUES ('$username','$usertype','$password')");
            		if (!empty($query)) {
            			echo "New User is Succesiful Added<br>";
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
        </div>

		<div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;copy right &copy 2015 all right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

		</div>



	</div>
</body>
</html>