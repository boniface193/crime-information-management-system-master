<?php
session_start();
	if ($_SESSION['usertypea']) {
		header("Location: ./admin");
	}
	else if ($_SESSION['usertypeu']) {
		header("Location: ./user");
	}
?>
<html>
<head>
<title>
 Crime information management system
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="wrapper">

		<div class="header">

			<img src="image/Logo.png" height="120px" width="900px"></div>
		<div class="content">
			<center>
				<form action="index.php" method="POST" class="form1"><br>
					LOGIN <hr><br>
				<input type="text" name="username" class="input" placeholder="Enter  Your  ID  Code"><br><br>
				<input type="password" name="password" class="input"placeholder="Enter  Password"><br><br>
				<input type="submit" name="btn" class="btn" value="Login"><br><br>
			</form>
			<?php
			extract($_POST);
			if (isset($btn)) {
				if (empty($username)&&empty($password)) {
					echo "All field are required";
				}
				elseif (empty($username)) {
					echo "Please provide Username";
				}
				elseif (empty($password)) {
					echo "Please provide Password";
				}
				else
				{
					require 'connect.php';
					$query=mysql_query("SELECT * FROM `login` WHERE `username`='$username' AND `password`='$password'");
					$row=mysql_num_rows($query);
					if ($row==1) {
						$a=mysql_fetch_array($query);
						$type=$a['usertype'];
						if ($type=="admin") {
							session_start();
							$_SESSION['usertypea']=$type;
							header("Location: ./admin");
						}
						elseif ($type=="user") {
							session_start();
							$_SESSION['usertypeu']=$type;
							header("Location: ./user");
						}
					}
					elseif ($row==0) {
						echo "Wrong Username/Password Combination";
					}
					else
					{
						mysql_error();
					}
				}
			}
			?>
			</center>
			
		</div>

		<div class="footer">ima.logan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy 2015 All right reserved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atc.ict

		</div>



	</div>


</body>
</html>