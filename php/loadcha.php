
<?php

require 'php/config.php';

$query = "SELECT * FROM post WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}

// Echo result as json 

//echo '{"result":[';

while ($row = mysql_fetch_array($result)) {

	$userid = $row['userid'];
	$query2 = "SELECT * FROM user WHERE id ='$userid'";
	$result2 = mysql_query($query2);

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
            ."<div id='vote'>"
            ."<button type='submit' class='btn btn-link vote'>"
            ."<span class='glyphicon glyphicon-thumbs-up'>".$row['likes']."</span>"
            ."</button>"
            ."<button type='submit' class='btn btn-link vote'>"
            ."<span class='glyphicon glyphicon-thumbs-down'>".$row['fucks']."</span>"
            ."</button>"
            ."</div>"
            ."<!--WRITE REPLAYS-->"
          	."<form role='form'>"
            ."<div class='form-group'>"
            ."<textarea id='chapost' class='form-control post' placeholder='Leave a comment or replay...'></textarea>"         
            ."</div>"
            ."<div class='count' >"
            ."<button type='button' class='btn btn-primary submitpost'></button>"
            ."<input id='fileupload' title='Add File' class='btn-default' type='file' name='files[]' data-filename-placement='inside' data-url='server/php/' multiple>"
            ."</div></form></div></article>";

  // $jtemp['id'] = $row['id'];
  // $jtemp['userid'] = $row['userid'];
  // $jtemp['content'] = $row['content'];
  // $jtemp['likes'] = $row['likes'];
  // $jtemp['fucks'] = $row['fucks'];

  //echo json_encode($jtemp);
  //echo ',';
        }
}
  //echo '0]}';

?>

