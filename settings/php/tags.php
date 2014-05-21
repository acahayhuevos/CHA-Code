<?php

 require 'config.php';
	  
  //$user = "marie";     
  $postid = $_POST['postid'];
  $tag = $_POST['tag'];

  	  $post = "INSERT INTO tag (tag, post_id) 
	  VALUES ('$tag', '$postid')";
	  mysql_query($post) or die(mysql_error());

?>