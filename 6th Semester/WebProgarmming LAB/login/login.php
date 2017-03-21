<html>
	<head>
	
	</head>	
	<body bgcolor="gray">
		<form name="" action="login.php" method="post">
			<h2 align="center">Login</h2>
			<table border=1 align="center">
				<tr>
					<td>User name</td>
					<td><input type="text" name="usertxt"/></td>
				</tr>
				
				<tr>
					<td>Password</td>
					<td><input type="password" name="passtxt"></td>
				</tr>
					<tr ><td colspan="2" align="center">
					<input type="submit" name="Submit" value="Submit"/></td>
				</tr>
				
				
			</table>
			<?php
			if(isset($_POST['Submit']))
			{
				$username=$_POST['usertxt'];
				$password=$_POST['passtxt'];

				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die("Could not connect: " . mysql_error());
				}


				mysql_select_db("dblogin");

				$result=mysql_query("SELECT * FROM tbllogin");
				while($row=mysql_fetch_array($result))
					{
						if($row[1]==$username AND  $row[2]==$password )
							{
								header("location: login2.html");
							}
						
					}
			?><script>alert("Incorrect password or username");</script><?php
			}
			
			?>
		</form>
	
	</body>

</html>
