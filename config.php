<?php
//on local machine
 //    $servername="localhost";
	// $username="root";
	// $password="";
 //    $dbname="bank";
	// 			error_reporting(E_ERROR | E_PARSE);
		
	// $conn= new mysqli($servername,$username,$password,$dbname);

// remote database connection

    $servername="remotemysql.com";
	$username="hXKzQw6QRS";
	$password="YE2uVVDdzc";
    $dbname="nKOwEQAS";
				// error_reporting(E_ERROR | E_PARSE);
		
	// $conn= new mysql($servername,$username,$password,$dbname);
$conn = "mysql:host=$servername;dbname=$dbname;charset=$charset";

try{
	$pdo = new PDO($conn,$servername,$pass);
	$pdo->setAttribute(PDO:ATTR_ERRMODE,PDO:ERRMODE_EXCEPTION);
}
	catch(PDOExpection $e){
		throw new PDOExpection($e->getMessage());
	}
}

$crud = new crud($pdo);


?>