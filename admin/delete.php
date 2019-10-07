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
            <center><u>Delete User</u></center>
                  
                 <form action="delete.php" method="POST" class="form1">
                  <center>
                       <table class="table2">
                      
                        <tr>
                              <td>Select User Id</td>
                              <td>
                                   <select placeholder="enter user name">
                                    <option></option>
                                    <?php
                                    require '../connect.php';
                                    $query=mysql_query("SELECT * FROM `login` WHERE `usertype`='user'");
                                    while ($row=mysql_fetch_array($query)) {
                                     $username=$row['username'];
                                     echo "<option>$username</option>";
                                    }
                                    ?>
                                          
                                    </select>
                              </td>
                        </tr>
                       </table> 
                         <input type="submit" name="btn" class="btn" value="Delete User"></center>
                  </center>
                  
                  </form>
                
                  
            	
            	<?php
            	extract($_POST);
            	if (isset($btn)) {
            		$query=mysql_query("DELETE FROM `login` WHERE `username`='$username'");
            		if (!empty($query)) {
            			echo "User Deleted...<br><br>

                  <a href='delete.php'>refresh page</a>";
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