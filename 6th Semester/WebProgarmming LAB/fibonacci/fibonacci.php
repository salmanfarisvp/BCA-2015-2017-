<html>
	<head>
	
	</head>	
	<body bgcolor="#00ffff">
		<form name="" action="fibonacci.php" method="get">
			<h2>Fibonacci</h2>
			<h4>Enter the number</h4>
			<input type="text" name="txt"/>
			<input type="submit" name="Submit" value="Submit"/>
		</form>
		<?php
			if($_GET)
			{
				$no=$_GET['txt'];
				$a=0;
				$b=1;
				echo $a." ".$b;
			for($i=0;$i<$no-2;$i++)
				{
						
						$c=$a+$b;
						$a=$b;
						$b=$c;
						echo $c." ";
				}
					
			}
			
		?>
	</body>

</html>
