<?php

	 $host = "localhost";
	 $user = "root";
	 $pw = "";
	 $db = "test2";

function dbConnect(){
	 $host = "localhost";
	 $user = "root";
	 $pw = "";
	 $db = "test2";
	 $db_connection = mysql_connect($host, $user,$pw);
	 mysql_select_db($db, $db_connection);
	 if(!$db_connection)
	 {
	   $errmsg = mysql_error($db_connection);
	   print "Connection failed: $errmsg <br />";
	   exit(1);
	 }
}

	 




?>