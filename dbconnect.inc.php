<?php

//this connects to the server database
//please change the database password accordingly

$conn_error_msg="Error in connecting to Database!";
$OPENSHIFT_MYSQL_DB_HOST='127.4.213.130';
$OPENSHIFT_MYSQL_DB_PORT='3306';
$mysql_server='mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/';
$mysql_user='adminpP41mvb';
$mysql_pass='4GtbCF64yQre';
$mysql_db='abhi';

$link=mysqli_connect($mysql_server,$mysql_user,$mysql_pass,$mysql_db);//connecting to the database

if(!$link){
	die($conn_error_msg);
}

?>
