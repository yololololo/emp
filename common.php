<?php

function getLastTime(){
	date_default_timezone_set('PRC');
	if(!empty($_COOKIE['last_visit_time'])){
		echo "上次登录时间：".$_COOKIE['last_visit_time'];
		setcookie('last_visit_time',date("Y-m-d  H:i:s"),time()+24*3600);
	}else{
		echo "第一次登录：";
		setcookie("last_visit_time",date("Y-m-d  H:i:s"),time()+24*3600);
	}
}

function getcookie($key){
	if(!empty($_COOKIE[$key])){
		return $_COOKIE[$key];
	}else{
		return '';
	}
}

function checkUserLegal(){
	session_start();
	if(empty($_SESSION['id'])){
		header('location:login.php?errno=1');
	}
}