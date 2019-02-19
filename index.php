<?php
	
	$link = "https://www.facebook.com/tv8vn/videos/2378707592162887";
	$options  = array('http' => array('user_agent' => 'custom user agent string'));
	$context  = stream_context_create($options);
	$homepage = file_get_contents($link, false, $context);
	// echo($homepage);

	$doc = new DOMDocument();
 	$doc->loadHTML($homepage);
 	// var_dump($doc);die;

  	$arr = $doc->getElementsByTagName("meta"); // DOMNodeList Object
  	foreach($arr as $item) { // DOMElement Object
  		if($item->getAttribute("property") == "og:video"){
  			
   			echo $item->getAttribute("content");die;
  		}
 	}