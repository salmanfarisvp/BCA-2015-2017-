	<?php
			if($_POST)
			{
				$name=$_POST['name'];
				$bs=$_POST['bs'];
				$designation=$_POST['designation'];
				if($designation="MN")
					{
						$allowance=1000+500;
					}
				else if($designation="SP")
					{
						$allowance=750+200;
					}
				else if($designation="CL")
					{
						$allowance=500+100;
					}
				else
					{
						$allowance=250;
					}
				$hra=$bs*0.25;
				$gross=$bs+$hra+$allowance;
				if($gross<=200)
					{
						$tax=0;
					}
				else if($gross<=4000)
					{
						$tax=$gross*0.03;
					}
				else if(4000<$gross and $gross<=5000)
					{
						$tax=$gross*0.05;
					}
				else
					{
						$tax=$gross*0.08;
					}		
					
				$net=$gross-$tax;
				?><br/><br/><h2 align="center" >Payslip</h2>
			<table align="center" bgcolor="#b3fff0">
					<tr>
						<td>Name</td>
						<td>&nbsp;</td>
						<td>:</td>
						<td>&nbsp;</td>
						<td><?php echo $name ?></td>
					</tr>
					<tr>
						<td>Basic Salary</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $bs ?></td>
					</tr>
					<tr>
						<td>Designation</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $designation ?></td>
					</tr>
					<tr>
						<td>Gross Salary</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $gross ?></td>
					</tr>
					<tr>
						<td>Income tax</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $tax ?></td>
					</tr>
				<tr>
						<td>Net Salary</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $net ?></td>
					</tr>
</table><?php
					
					}
		
	?>	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
