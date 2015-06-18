Attempts to be the simplest PHP Flickr API client possible.

Usage

	include 'flickr.simple.php';
	
	$key = '-your-key-here-';
	$secret = '-your-secret-here-';

	$flickr = new Flickr($key, $secret);
	
	# request a token with write level permission
	
	$token = $flickr->auth_shell('write');

	$method = 'flickr.photos.search';
	$args = array('auth_token' => $token, 
		'user_id' => '-your-user-id');

	$rsp = $flickr->method($method, $args);

	var_dump($rsp);
