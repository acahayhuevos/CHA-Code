<?php


  require 'config.php';
	  
  $user = "marie";     
  $title = $_POST['title'];
  $content = $_POST['content'];
            
  $post = "INSERT INTO posts (nickname, title, content) 
  VALUES ('$user', '$title', '$content')";
  mysql_query($post) or die(mysql_error());
  header("Location: profile.php");
            
?>