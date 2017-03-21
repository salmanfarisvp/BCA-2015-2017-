<?php

				$acc=$_POST['acc'];
$dbhost = "localhost";
				$dbuser = "root";
				$dbpass = "";
				$conn = mysql_connect($dbhost, $dbuser, $dbpass);
				if(! $conn )
				{
				  die("Could not connect: " . mysql_error());
				}


				mysql_select_db("dblogin");
			if(isset($_POST['Submit']))
			{
				$acc=$_POST['acc'];

				

				$result=mysql_query("SELECT * FROM account WHERE accountno='$acc'");
				$row=mysql_fetch_array($result);
					
						$name=$row[1];
						$amount=$row[2];
					
				echo'
				<table align="center" >
				<form name="" action="account2.php" method="post">
					<tr>
						<td>Account number</td>
						<td><input type="text" name="acc" value='.$acc.'></td>
					</tr>
					<tr>
						<td>Account Name</td>
						<td><input type="text" name="name" value='.$name.'></td>
					</tr>
					<tr>
						<td>Amount</td>
						<td><input type="text" name="amount" value='.$amount.'></td>
					</tr>
					<tr ><td colspan="2" align="center">
					<input type="submit" name="Update" value="Update"/></td>
				</tr></form>
					<form name="" action="account2.php" method="post">
					<tr ><td colspan="2" align="center"><input type="hidden" name="acc" value='.$acc.'>
					<input type="submit" name="Delete" value="Delete"/></td>
				</tr>
					
					
					</form>
					</table>
					';
					
			}
if(isset($_POST['Update']))
{
$acc=$_POST['acc'];
$name=$_POST['name'];
$amount=$_POST['amount'];
	if(!$sql=mysql_query("UPDATE account SET
						accountname='$name',amount='$amount' WHERE accountno='$acc'"))	
							echo"Problem updating";
	else 
		echo'<script>alert("Update successful");</script>';

}	
			
if(isset($_POST['Delete']))
{
	if(!$sql=mysql_query("DELETE FROM account  WHERE accountno='$acc'"))	
							echo"Problem deleting";
	else 
		echo'<script>alert("Deletion successful");</script>';

}