	<?php
			if($_POST)
			{
				$regno=$_POST['txt'];

				$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die("Could not connect: " . mysql_error());
				}


				mysql_select_db("dblogin");
				$result=mysql_query("SELECT * FROM student where reg_no='$regno'");
			
				?> <h2 align="center" >Marklist</h2>
				<table align="center" bgcolor="yellow"><?php
				while($row = mysql_fetch_array($result))
				{
									
									$name=$row[1];
									$mark=$row[2];
									$grade=$row[3];
				}			?>
							<tr>
								<td>Reg no</td>
								<td>&nbsp;</td>
								<td>:</td>
								<td>&nbsp;</td>
								<td><?php echo $regno; ?></td>
							</tr>
							<tr>
								<td>Name</td>
								<td>&nbsp;</td>
								<td>:</td>
								<td>&nbsp;</td>
								<td><?php echo $name; ?></td>
							</tr>
							<tr>
								<td>Mark</td>
								<td>&nbsp;</td>
								<td>:</td>
								<td>&nbsp;</td>
								<td><?php echo $mark; ?></td>
							</tr>
							<tr>
								<td>Grade</td>
								<td>&nbsp;</td>
								<td>:</td>
								<td>&nbsp;</td>
								<td><?php echo $grade; ?></td>
							</tr>

				
			</table>
<?php
					
			}
		
	?>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
