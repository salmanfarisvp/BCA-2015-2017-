<html>
	<body bgcolor=yellow>
		<?php
		$time=90*60*24*60+time();
	setcookie('lastvisit',date("G:i - m/d/y"),$time);
	if(isset($_COOKIE['lastvisit']))
		$visit=$_COOKIE['lastvisit'];
	else
		echo'Welcome';
	echo'You have visited last time at'.$visit;
		?>
		
	</body>
</html>