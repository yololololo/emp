<?php
//数据库连接函数
class db{
function conn($dbname){
	$dsn="mysql:host=localhost;dbname=$dbname;";
try{
	$db=new PDO($dsn,'root','root');
	return $db;
}catch(PDOException $e){
	die('error:'.$e->getMessage());
}
}
}





