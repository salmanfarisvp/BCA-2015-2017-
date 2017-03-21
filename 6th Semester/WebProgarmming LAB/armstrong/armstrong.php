<html>
	<head>
	
	</head>	
	<body bgcolor="gray">
		<form name="" action="armstrong.php" method="get">
			<h2>Armstrong</h2>
			<h4>Enter the number</h4>
			<input type="text" name="txt"/>
			<input type="submit" name="Submit" value="Submit"/>
		</form>
		<?php
			if($_GET)
			{
			$no=$_GET['txt'];
			$n=$no;
			$sum=0;
				while($n>0)
				{
				$r=$n%10;
				$sum+=$r*$r*$r;
				$n/=10;
				}	
			if($no==$sum)
				echo $no." is armstrong number";
			else 
				echo $no." is not an armstrong number";
			
			}
			
		?>
	</body>

</html>
