<?php

	session_start();
	require 'config.php';

	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$nickname = "anon";


  	if(isset($email) && isset(password)){
  		$post = "INSERT INTO user (nickname, password, avatar, email) 
	 	VALUES ('$nickname', '$password', 'imgaes/default_user.jpg', '$email')";
		mysql_query($post) or die(mysql_error());

		
        echo '{"id":[';

        while ($row = mysql_fetch_array($result)) {
        $jtemp = $row['id'];
        echo json_encode ($jtemp);
    	}

    	echo ']}';

  	}


?>