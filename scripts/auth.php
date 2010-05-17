<?php
	include 'flickr.simple.php';
	
	$key = '-your-key-here-';
	$secret = '-your-secret-here-';
	
	$flickr = new Flickr($key, $secret);
	
	# request a token with write level permission
	
	echo $flickr->auth_shell('write');
?>