<?php

// Kickstart the framework

$f3=require('lib/base.php');

$f3->set('DEBUG',3);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

include('app/bootstrap.php');

// Load configuration
$f3->config('config.ini');

$f3->run();

//echo $SCHEME.'://'.$HOST.':'.$PORT.$BASE.'/';