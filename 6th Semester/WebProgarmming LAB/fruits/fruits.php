<html>
	<head>
	
	</head>	
	<body bgcolor="sky blue">
		<form name="" action="fruits.php" method="post">
			<br/><br/><h2 align="center">FRUITS</h2>
			<table  align="center">
				<tr>
					<td>Select a fruit</td><td></td>
					<td><select name="fruit">
						<option name="Apple">Apple</option>
						<option name="Mango">Mango</option>
						<option name="Orange">Orange</option>
						<option name="Pineapple">Pineapple</option>
						<option name="Grapes">Grapes</option>
						<option name="Pappaya">Pappaya</option>
						<option name="Watermelon">Watermelon</option>
										
						</select></td>
				</tr>
				<tr ><td colspan="3" align="center">
					<input type="submit" name="Submit" value="Submit"/></td>
				</tr>
			</table>
			
		</form>
	<?php
	if(isset($_POST['Submit']))
	
	{
	$fruit=$_POST['fruit'];
		echo '<script>alert("You selected '.$fruit.' ");</script>';
	
	
	}	
		?>
	</body>

</html>
