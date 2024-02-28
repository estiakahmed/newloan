<?php 
	
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);

	if( !function_exists('header') ){
		exit('.h');
	}
	
	function generateRandomString($length){

		if( empty($length) ){
			$length = 10;
		}

	    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

	$VERSION = '3.1.7659639756475654';
	

	//<< loader