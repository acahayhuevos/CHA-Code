
<?php

require 'config.php';
session_start();


if(isset($_SESSION['type'])) {

    // ---- pagination ----->
    $offset = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
    $postnumbers = is_numeric($_POST['number']) ? $_POST['number'] : die();

    $type = $_SESSION['type'];

    if ($type == 0) {

        $_query = "SELECT * FROM post WHERE 1 ORDER BY id DESC LIMIT ".$postnumbers." OFFSET ".$offset;

    } elseif ($type == 1){

        $tag = $_SESSION['tag'];
        $_query = "SELECT tag.*, post.* FROM tag, post WHERE post.id = tag.post_id AND tag.tag = '$tag' ORDER BY post.id DESC LIMIT ".$postnumbers." OFFSET ".$offset;
    
    } elseif ($type == 2){
        
    }

    $result = mysql_query($_query);

    if (!$result) {
      die('Invalid query: ' . mysql_error());
    }

    /*
    SELECT post.*, tag.* FROM tag, post WHERE post.id = tag.post_id
    ORDER BY `post`.`id` DESC 
    */

    while ($row = mysql_fetch_array($result)) {

    	$userid = $row['userid'];
        $postid = $row['id'];
    	$query2 = "SELECT * FROM user WHERE id ='$userid'";
    	$result2 = mysql_query($query2);

        $temp = mysql_query("SELECT COUNT(postid) FROM replay WHERE replay.postid = '$postid'");
        $replyCount =mysql_result($temp, 0);


    	while ($row2 = mysql_fetch_array($result2)) {

                $query1 = "SELECT * FROM tag WHERE tag.post_id ='$postid'";
                $result1 = mysql_query($query1);

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
                    ."<p>".$row['content']."</p>";
                    if(!empty($row['img']) ){
                        echo "<img src='".$row['img']."' class='img-responsive img-rounded' alt='the image is gone, sorry' style='margin-top: 8px; margin-bottom: 8px;' >";
                    }
                    echo "</div><div class='tags'>";

                    while ($row1 = mysql_fetch_array($result1)) {
                        echo "<span class='label label-default'><a href='query.php?tag=".$row1['tag']."'>"."#".$row1['tag']."</a></span>";
                    }

                    echo "</div><div id='vote' class=".$row["id"].">"
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
                    ."<textarea id='".$row["id"]."' class='form-control post' placeholder='Leave a comment or replay'></textarea></div>"  //id=chapost       
                    ."<div class='count' style='display:none;'>"
                    ."<input type='text' class='form-control url' placeholder='paste url' style='display: none;'>"
                    ."<div></div>"
                    ."<button type='button' class='btn btn-primary submitpost'></button>"
                    ."<button type='button' class='btn btn-link imgurl pull-left'>"
                    ."<span class='glyphicon glyphicon-camera'></span>"
                    ."</button></div></form><div id='repliesContainer' style='display:none;'></div>";

                /* $query3 = "SELECT * FROM user, replay WHERE replay.postid =' $postid' AND replay.userid = user.id";
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
                            ."<p>".$row3['content']."</p>";
                            if(!empty($row3['img']) ){
                                echo "<img src='".$row3['img']."' class='img-responsive img-rounded' alt='the image is gone, sorry' style='margin-top: 8px; margin-bottom: 8px;' >";
                            }
                            echo "<div id='vote' class='".$row3['id']."'>"  //<----- new class with id 
                            ."<button type='submit' class='btn btn-link vote'>"
                            .$row3['likes']." likes"
                            ."</button>"
                            ."<button type='submit' class='btn btn-link vote'>"
                            .$row3['fucks']." fucks"
                            ."</button>"
                            ."</button></div></div></div>";

                        } */

                        echo "</div></article>";

          }

    }
}

?>

