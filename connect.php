<?php

/* Database config */
					$server_name = "itd2.cincinnatistate.edu";
					$username = "ryibrahim";
					$password = "0653690";
					$dbname = "01PHP400IbrahimR";

/* End config */

$link = new mysqli($server_name, $username, $password, $dbname);
		
if ($link->connect_error) {
   die("Connection failed: " . $link->connect_error);
}


mysql_set_charset('utf8');
mysql_select_db($link);

?>