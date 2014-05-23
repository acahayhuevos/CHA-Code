<?php

	session_start();
	require 'config.php';

<<<<<<< HEAD
	  $email = $_POST['email'];
  	$password = $_POST['password'];
  	$nickname = $_POST['username'];
    $avatar = $_POST['avatar'];
    $type = $_POST['type'];

    if(isset($email) && isset($password)){

      if($type == 0){

        $query = "SELECT * FROM user WHERE nickname ='$nickname'"; //AND password = '$password'
        $result = mysql_query($query);

        if(mysql_num_rows($result) > 0){
                 
            echo '{"result":[';
            $jtemp = "0";
            echo json_encode ($jtemp);
            echo ']}';

        }
        else{
          
          $post = "INSERT INTO user (nickname, password, avatar, email) 
          VALUES ('$nickname', '$password', '$avatar', '$email')";
          mysql_query($post) or die(mysql_error());

            $query = "SELECT * FROM user WHERE nickname ='$nickname' AND password = '$password'"; //AND password = '$password'
            $result = mysql_query($query);
            
            while ($row = mysql_fetch_array($result)) {
              $_SESSION['username'] = $nickname;
              $_SESSION['userid'] = $row['id'] ;
              $_SESSION['avatar'] = $avatar;
           }

            echo '{"result":[';
            $jtemp = "1";
            echo json_encode ($jtemp);
            echo ']}';
        }

    }else{
      $query = "SELECT * FROM user WHERE email ='$email' AND password = '$password'"; //AND password = '$password'
      $result = mysql_query($query);

      if(mysql_num_rows($result) > 0){  

        while ($row = mysql_fetch_array($result)) {

          $_SESSION['username'] = $row['nickname'];
          $_SESSION['userid'] = $row['id'] ;
          $_SESSION['avatar'] = $row['avatar'];
        }

        echo '{"result":[';
        $jtemp = "1";
        echo json_encode ($jtemp);
        echo ']}';

      }else{
            echo '{"result":[';
            $jtemp = "0";
            echo json_encode ($jtemp);
            echo ']}';
      }
    }

    }



    
=======
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
>>>>>>> 1bc5e6e2ec1a8af704190632e9a9f0f10262eb81


?>