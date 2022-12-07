<?php 
try{	$db = new PDO("mysql:host=localhost;dbname=projedb;","root","");
			//echo "Succesfuly";
}catch(PDOExpection $e){
			//echo "Fail: " . $e;
}