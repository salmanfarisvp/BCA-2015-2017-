<?php
			if($_POST)
			{
			$name=$_POST['txt'];
			$address=$_POST['address'];
			$father=$_POST['father'];
			$mother=$_POST['mother'];
			$qualification=$_POST['qualification'];
			$experience=$_POST['experience'];
			
				?><h2 align="center">Biodata</h2><table align="center" bgcolor="sky blue">
					<tr>
						<td>Name</td>
						<td>&nbsp;</td>
						<td>:</td>
						<td>&nbsp;</td>
						<td><?php echo $name ?></td>
					</tr>
					<tr>
						<td>Address</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $address ?></td>
					</tr>
					<tr>
						<td>Father's name</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $father ?></td>
					</tr>
					<tr>
						<td>Mother's name</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $mother ?></td>
					</tr>
					<tr>
						<td>Qualification</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $qualification ?></td>
					</tr>
					<tr>
						<td>Experience</td>
						<td>&nbsp;</td>
						<td>:</td>
         			    <td>&nbsp;</td>
						<td><?php echo $experience ?></td>
					</tr>
					
				<?php
			}

			
		?>