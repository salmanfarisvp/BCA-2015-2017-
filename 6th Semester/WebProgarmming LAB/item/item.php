<html>
	<head>
	
	</head>	
	<body bgcolor=#b3c6ff>
		
			<h2 align="center">Product Details</h2>
			<table border=1 align="center">
				<form name="" action="item.php" method="post">
				<tr>
					<td>Item Name</td>
					<td><input type="text" name="name"/></td>
				</tr>
				
				<tr>
					<td>Unit Price</td>
					<td><input type="text" name="unitprice"/></td>
				</tr>
				
				
				<tr ><td colspan="2" align="center">
					<input type="submit" name="Submit" value="Add"/>
					</td>
					
				</tr>
					</form>
				<form name="" action="item2.php" method="post">
				<tr ><td colspan="2" align="center">
					<input type="submit" name="Display" value="Display"/>
					</td>
					</tr>
					</form>
				
			</table>
			
	
	
		<?php
			if(isset($_POST['Submit']))
			{
				$name=$_POST['name'];
				$unitprice=$_POST['unitprice'];

				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die("Could not connect: " . mysql_error());
				}


				mysql_select_db("dblogin");

				$result=mysql_query("INSERT INTO product(itemname,unitprice) VALUES('$name','$unitprice')");
				if($result)
					echo'<script>alert("Insertion Successful");</script>';
				else
					echo'<script>alert("Insertion Failed");</script>';
					
				
			}
			
			



		?>
		
	</body>

</html>
