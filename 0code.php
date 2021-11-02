<?php
	require_once($rut.'constant.php');
	//-----------------------------------
	$location = HTTP.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	//-----------------------------------
	if (isset($_SESSION['sid'])) {
		$sid = $_SESSION['sid'];
	}else{
		$_SESSION['sid'] = $sid = session_id();
	}
	//-----------------------------------
	if(isset($_REQUEST['p'])){
		$pid = base64_decode($_REQUEST['p']);
	}
	if(isset($_REQUEST['v'])){
		$vid = base64_decode($_REQUEST['v']);
	}
	//-----------------------------------