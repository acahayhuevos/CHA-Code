
<?php

$server     = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'chadb';
$dsn        = "mysql:host=$server;dbname=$database";


		$connection = mysql_connect ($server, $username, $password);
		if (!$connection) {
		  die('Not connected : ' . mysql_error());
		}

        $db_selected = mysql_select_db($database, $connection);
			if (!$db_selected) {die ('Can\'t use db : ' . mysql_error());}
                  
        //echo json_encode( "connected to DB" );

?>