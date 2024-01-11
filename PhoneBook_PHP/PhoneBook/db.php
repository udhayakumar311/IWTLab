<?php
$host = 'localhost';
$username ='root';
$password = '';
$database = 'phonebook';
$con = @mysql_connect($host, $username, $password);
if(!$con){
	die('could not connect'. mysql_error());
}
$dbcon= @mysql_select_db( $database,$con);
if(!$dbcon){
	die('could not find database'. mysql_error());
}


?>