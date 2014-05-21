        <?php
        
        session_start();

        $type = $_POST['type'];

        echo '{"result":[';

        $jtemp['username'] = $_SESSION['username'] ;
        $jtemp['userid'] = $_SESSION['userid'];
        $jtemp['avatar'] = $_SESSION['avatar'];
        
        echo json_encode ($jtemp);
    	echo ']}';
 
        ?>