<?php	
	
	
	$f3->set('header','header.php');
	$f3->set('content','lockscreen.php');
	echo View::instance()->render('layout.htm');
	