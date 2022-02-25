<?php
    require_once('../config/connection/connection.php');
    require_once('../config/connection/security.php');
    require_once('../config/function/data.php');
    $secu	= new Security;
    $base	= new DB;
    $data	= new Data;
    $catat	= date('Y-m-d H:i:s');
    $idExt	= $secu->injection(@$_POST['id']);
    $kodeExt= $secu->injection(@$_POST['kode']);
    $encrypt= $secu->injection(@$_GET['encrypt']);
    $admin	= $secu->injection(@$_COOKIE['adminkuy']);
	$kunci	= $secu->injection(@$_COOKIE['kuncikuy']);
    $act	= $secu->injection(@$_GET['act']);
    $conn	= $base->open();
    $hasil 	= "Error";
    $msgBugs = array();
	$secu->validadmin($admin, $kunci);

    if($secu->validadmin($admin, $kunci)==false){
		

        
		$url	= 'signout';
	} else {

    }



?>