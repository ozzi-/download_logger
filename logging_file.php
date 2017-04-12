<?php
	$actualFile = 'actual_file.pdf';
	$logfile = $actualFile.".log";
	
	if(preg_match('/robot|slurp|simplepie|yandex|adsbot|googlebot|spider|crawler|curl|^$/i', strtolower($_SERVER['HTTP_USER_AGENT'])) || !file_exists($actualFile)){
		file_put_contents($logfile, "[404] ".$_SERVER['REMOTE_ADDR']." @ ".date("Y-m-d H:i:s")." | ".$_SERVER['HTTP_USER_AGENT']."\r\n", FILE_APPEND);
		header('HTTP/1.0 404 Not Found');
		echo "<h1>404 Not Found</h1>";
		echo "The page that you have requested could not be found.";
		die();
	}else{
		file_put_contents($logfile, "[200] ".$_SERVER['REMOTE_ADDR']." @ ".date("Y-m-d H:i:s")." | ".$_SERVER['HTTP_USER_AGENT']."\r\n", FILE_APPEND);
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="'.$actualFile.'"');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		header('Content-Length: ' . filesize($actualFile));
		readfile($actualFile);
		exit;
	}
?>
