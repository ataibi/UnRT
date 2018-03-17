<?php
	require "twitteroauth/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;
	if(!@include("credentials.php"))
		header('Location: index.php?setup');
	$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
?>