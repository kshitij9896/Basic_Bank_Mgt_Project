<?php
//on local machine
    $servername="localhost";
	$username="root";
	$password="";
    $dbname="bank";	
	$conn= new mysqli($servername,$username,$password,$dbname);
	error_reporting(E_ERROR | E_PARSE);
	
?>