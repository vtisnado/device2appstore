<?php
// define the redirect function
function getBrowser($deviceString){
	$deviceModel = strtolower($deviceString);
	if (strpos($deviceModel, "android")){
		header('Location: https://play.google.com/YOUR-ANDROID-APP');
	}else if (strpos($deviceModel, "iphone")){
		header('Location: https://itunes.apple.com/YOUR-IPHONE-APP');
	}else if (strpos($deviceModel, "ipad")){
		header('Location: https://itunes.apple.com/YOUR-IPAD-APP');
	}else if (strpos($deviceModel, "blackberry")){
		header('Location: http://appworld.blackberry.com/YOUR-BLACKBERRY-APP');
	}else{
		header('Location: YOUR-MOBILE-SITE');
	}
}
// get the user agent string
$agent	=	strtolower($_SERVER['HTTP_USER_AGENT']);

// call the redirect function
$deviceScreen = getBrowser($agent); 
?>
