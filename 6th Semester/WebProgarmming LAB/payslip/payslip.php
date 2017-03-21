<html>
	<head>
	
	</head>	
	<body bgcolor="#b3fff0">
		<form name="" action="payslip2.php" method="post">
			<h2 align="center">Biodata</h2>
			<table border=1 align="center">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"/></td>
				</tr>
				
				<tr>
					<td>Basic Salary</td>
					<td><input type="text" name="bs"/></td>
				</tr>
				
				<tr>
					<td>Designation</td>
					<td>
						<select name="designation">
							<option name="MN">Manager</option>
							<option name="SP">Supervisor</option>
							<option name="CL">Clerk</option>
							<option name="PN">Peon</option>
						</select>
					</td>
				</tr>
				
			
				<tr ><td colspan="2" align="center">
					<input type="submit" name="Submit" value="Submit"/></td>
				</tr>
				
				
			</table>
			
		</form>

	</body>

</html>
