<?php
error_reporting(0);
include_once('config/connection.php');
include_once('functions_search.php');

if(!empty($_GET['f'])) {
	$f = mysqli_real_escape_string($connect, $_GET['f']);
} else {
	$f = '';
}

if(!empty($_GET['s'])) {
	$s = mysqli_real_escape_string($connect, $_GET['s']);
} else {
	$s = '';
}

if($f == 'search') {
	
	if(!empty($s)) {
		
		if(Search($s)) {
			
			$html = '';
					
			$html_fi = Search($s);
					
			foreach($html_fi as $tt['search']) {
				$html	.=	Load('result-search');
			}
			
			$data = array(
				'status' => 200,
				'html' => $html
			);
			
		} else {
			$data = array(
				'status' => 400
			);
		}
		
	} else {
		
		$data = array(
			'status' => 400
		);
	}
	
	header("Content-Type: application/json");
	echo json_encode($data);
	exit();
}

mysqli_close($connect);
?>