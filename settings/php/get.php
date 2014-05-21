<?php

  require 'config.php';

  $postid = $_POST['postid'];
  $query = "SELECT * FROM user, replay WHERE replay.postid =' $postid' AND replay.userid = user.id";
  $result = mysql_query($query);

	echo '{"result":[';

	while ($row = mysql_fetch_array($result)) {

	  $jtemp['id'] = $row['id'];
      $jtemp['nickname'] = $row['nickname'];
	  $jtemp['avatar'] = $row['avatar'];
	  $jtemp['content'] = $row['content'];
      $jtemp['img'] = $row['img'];
	  $jtemp['likes'] = $row['likes'];
	  $jtemp['fucks'] = $row['fucks'];

	  echo json_encode($jtemp);
	  echo ',';
	}

	echo '0]}';

    /*while($row3 = mysql_fetch_array($result3)){

            echo "<div class='replay well'>"            
            ."<aside>"
            ."<div class='avatar2'>"
            ."<img src='".$row3['avatar']."' class='img-circle img-responsive' alt='username'>"
            ."</div>"
            ."</aside>"
            ."<div class='content'>"
            ."<p class='username'>".$row3['nickname']."</p>"
            ."<p>".$row3['content']."</p>"
            ."<div id='vote'>"
            ."<button type='submit' class='btn btn-link vote'>"
            .$row3['likes']." likes"
            ."</button>"
            ."<button type='submit' class='btn btn-link vote'>"
            .$row3['fucks']." fucks"
            ."</button>"
            ."</button></div></div></div></article>";

        }*/

?>