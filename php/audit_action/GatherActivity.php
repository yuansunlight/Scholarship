<?php 
	require('../dao/GatherDao.php');
	
	session_start();
	$sc_admin=$_SESSION['admin'];
	
	$gDao=new GatherDao;
	$obj_arr=$gDao->getActivityScho($sc_admin);
	echo json_encode($obj_arr);
?>