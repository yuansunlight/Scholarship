<?php 
	require('../dao/SpiritualDao.php');
	
	session_start();
	$user_id=$_SESSION['u_sid'];
	$sc_annual=$_REQUEST['sc_annual'];
	
	$aDao=new SpiritualDao;
	$obj_arr=$aDao->getAppraisalRatio($user_id,$sc_annual);
	echo json_encode($obj_arr);
?>