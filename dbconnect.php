<?php
//remote mode connection
error_reporting(E_ERROR | E_PARSE);
define('DBHOST','localhost');
define('DBUSER','id16608172_root');
define('DBPASS','$S@4KrQ)^l{T*nQg');
define('DBNAME','id16608172_bank');

$conn = mysqli_connect(DBHOST,DBUSER,DBPASS);

if (!$conn) {
    error_log("Failed to connect to MySQL: " . mysqli_error($conn));
    die('Internal server error');
}


$db_select = mysqli_select_db($conn, DBNAME);
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($conn));
    die('Internal server error');
}

?>