<?php


  require 'config.php';
	  
  //$user = "marie";     
  $userid = $_POST['user'];
  $postid = $_POST['postid'];
  $content = $_POST['text'];
  $type = $_POST['type'];
            
  if($type == 1){
	  $post = "INSERT INTO post (content, userid, likes, fucks) 
	  VALUES ('$content', '$userid', '0', '0')";
	  mysql_query($post) or die(mysql_error());
	} elseif ($type == 2){
	  $post = "INSERT INTO replay (content, postid, userid, likes, fucks) 
	  VALUES ('$content', '$postid', '$userid', '0', '0')";
	  mysql_query($post) or die(mysql_error());
	} elseif ($type == 3) {
	  	$update ="UPDATE post SET likes = (likes + 1) WHERE id = '$postid'";
	  	mysql_query($update) or die(mysql_error());
	} elseif ($type == 4){
		$update ="UPDATE post SET fucks = (fucks + 1) WHERE id = '$postid'";
	  	mysql_query($update) or die(mysql_error());
	}elseif ($type == 5) {
	  	$update ="UPDATE replay SET likes = (likes + 1) WHERE id = '$postid'";
	  	mysql_query($update) or die(mysql_error());
	} elseif ($type == 6){
		$update ="UPDATE replay SET fucks = (fucks + 1) WHERE id = '$postid'";
	  	mysql_query($update) or die(mysql_error());
	}
            
?>