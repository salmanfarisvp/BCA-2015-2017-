<html>
	<head>
	
	</head>	
	<body bgcolor="#00ffff">
		<form name="" action="account2.php" method="post">
			<h2 align="center">Account</h2>
			<table border=1 align="center">
				<tr>
					<td>Account number</td>
					<td><input type="text" name="acc"/></td>
				</tr>
				
			
				<tr ><td colspan="2" align="center">
					<input type="submit" name="Submit" value="Search"/></td>
				</tr>
				
				
			</table>
			
		</form>
		<table border=1 align="center" bgcolor="white">
				<tr>
					<td>Account number</td>
					<td>Account Name</td>
					<td>Amount</td>
				</tr>
			<?php
		
				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die("Could not connect: " . mysql_error());
				}


				mysql_select_db("dblogin");

				$result=mysql_query("SELECT * FROM account");
				while($row=mysql_fetch_array($result))
					{
				
			
						echo'	<tr >
									<td>'.$row[0].'</td>
									<td>'.$row[1].'</td>
									<td>'.$row[2].'</td>
								</tr>';

					}
		
				?>
			</table>
<?php
			if($_POST)
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
				
					}
		
			}
		?>
	</body>

</html>