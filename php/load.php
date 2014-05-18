
<?php

require 'php/config.php';

$query = "SELECT * FROM post WHERE 1 ORDER BY id DESC";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}


while ($row = mysql_fetch_array($result)) {

	$userid = $row['userid'];
  $postid = $row['id'];
	$query2 = "SELECT * FROM user WHERE id ='$userid'";
	$result2 = mysql_query($query2);

  $temp = mysql_query("SELECT COUNT(postid) FROM replay WHERE replay.postid = '$postid'");
  $replyCount =mysql_result($temp, 0);


	while ($row2 = mysql_fetch_array($result2)) {

        echo "<article>"
            ."<!-- AVATAR -->"
            ."<!-- Avatar no es responsive para res. movil -->"
            ."<aside>"
            ."<div class='avatar'>"
            ."<img src='".$row2['avatar']."' class='img-circle img-responsive' alt='username'>"
            ."</div>"
            ."</aside>"
            ."<!-- POST -->"
            ."<div class='well'>"
            ."<div class='post'>"
            ."<p class='username'>".$row2['nickname']."</p>"
            ."<p>".$row['content']."</p>"
            ."</div>"
            ."<p>#pickup #shypeople #ifyouknowhatimean</p>"
            ."<div id='vote' class=".$row["id"].">"
            ."<button type='button' class='btn btn-link vote'>"
            .$row['likes']." likes"
            ."</button>"
            ."<button type='button' class='btn btn-link vote'>"
            .$row['fucks']." fucks"
            ."</button>"
            ."<button type='button' class='btn btn-link showreplies'>"
            .$replyCount." replies "."<span class='glyphicon glyphicon-chevron-up'></span>"
            ."</button>"
            ."</div>"
            ."<!--WRITE REPLAYS-->"
            ."<form role='form'>"
            ."<div class='form-group'>"
            ."<textarea id='".$row["id"]."' class='form-control post' placeholder='Leave a comment or replay...'></textarea>"  //id=chapost       
            ."</div>"
            ."<div class='count' >"
            ."<button type='button' class='btn btn-primary submitpost'></button>"
            ."<input id='fileupload' title='Add File' class='btn-default' type='file' name='files[]' data-filename-placement='inside' data-url='server/php/' multiple>"
            ."</div></form>";

            $query3 = "SELECT * FROM user, replay WHERE replay.postid =' $postid' AND replay.userid = user.id";
            $result3 = mysql_query($query3);

                while($row3 = mysql_fetch_array($result3)){

                        echo "<div class='replies well' style='display: none;' >"   //style='display: none;'         
                        ."<aside>"
                        ."<div class='avatar2'>"
                        ."<img src='".$row3['avatar']."' class='img-circle img-responsive' alt='username'>"
                        ."</div>"
                        ."</aside>"
                        ."<div class='content'>"
                        ."<p class='username'>".$row3['nickname']."</p>"
                        ."<p>".$row3['content']."</p>"
                        ."<div id='vote' class='".$row3['id']."'>"  //<----- new class with id 
                        ."<button type='submit' class='btn btn-link vote'>"
                        .$row3['likes']." likes"
                        ."</button>"
                        ."<button type='submit' class='btn btn-link vote'>"
                        .$row3['fucks']." fucks"
                        ."</button>"
                        ."</button></div></div></div>";

                    }

                    echo "</div></article>";

      }
}

?>

