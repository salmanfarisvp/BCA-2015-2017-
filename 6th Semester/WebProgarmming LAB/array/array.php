<?php
if(isset($_POST['search']))
{
$sr=$_POST['txtsr'];
	$names=array("Athira","Anjali","Anjali","Ali","Sajitha","Binsha","Daneil","Anjali","Madhu","Freddy");
			
	$result=array_search($sr,$names);
	if($result==0)
		echo'<script>alert("Not found");</script>';
	else
		echo '<script>alert("'.$sr.' found at '.($result+1).'");</script>';
	
}


?>
<html>
	<head></head>
	<body bgcolor=pink>
			<form name="" action="array.php" method="post">
			<h2 align="center">Array of names</h2>
			<table  align="center">
				<tr>
					<td><h2>10 Names</h2></td>
				</tr>
		<?php
			$names=array("Athira","Anjali","Anjali","Ali","Sajitha","Binsha","Daneil","Anjali","Madhu","Freddy");
			echo'<tr><td>';
			foreach($names as $key =>$val)
					{
						echo $val.'  ,';
					}
			echo '</td></tr>';
			echo'<tr><td>';
				echo '<h2>Sorted Names</h2>';
				sort($names);
				foreach($names as $key =>$val)
					{
						echo $val.'  ,';
					}
			echo '</td></tr>';
			echo'<tr><td>';
			echo '<h2>No Duplicate Names</h2>';
				$result=array_unique($names);
				foreach($result as $key =>$val)
					{
						echo $val.'  ,';
					}
			echo '</td></tr>';
			echo'<tr><td>';
			echo '<h2>Remove last Element</h2>';
				$result=array_pop($names);
				foreach($names as $key =>$val)
					{
						echo $val.'  ,';
					}
			echo '</td></tr>';
			echo'<tr><td>';
			echo '<h2>Reverse</h2>';
				$result=array_reverse($names);
				foreach($result as $key =>$val)
					{
						echo $val.'  ,';
					}
			echo '</td></tr>';
	?>
	
				<tr><td><h2>Reverse</h2></td></tr>
				<tr>
					<td><input type="text" name="txtsr" placeholder="Enter element to search"></td>
					<td><input type="submit" name="search" value="Search"></td>
				</tr>
			</table>
		</form>
	</body>
</html>