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
$result=mysql_query("SELECT * FROM product");
				echo'	<br/><br/><br/><h2 align="center">Product Details</h2><table border=1 align="center">
				<form name="" action="item.php" method="post">
				<tr>
					<td>Item Code</td>
					<td>Item Name</td>
					<td>Unit Price</td>
					
				</tr>';
				while($row=mysql_fetch_array($result))
					{
			
				
				echo '<tr>
					<td>'.$row[0].'</td>
					<td>'.$row[1].'</td>
					<td>'.$row[2].'</td>
				</tr>';
				
				}
				
				echo '</table>';




?>