<?php

define("DBHOST", "161.117.122.252");
define("DBNAME", "p5_6");
define("DBUSER", "p5_6");
define("DBPASS", "BKDEzs6TDN");

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error)
{
    session_start();
    $_SESSION['dberror']=$conn->connect_error;
    header('Location:dbError');

}

?>


