<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>action</title>
	<script type="text/javascript">
		function count(){
			var s=document.getElementById("second");
			if(s.innerHTML==0){
				window.location="emplist.php";
			}else{
				s.innerHTML=s.innerHTML*1-1;
			}
		}
		setInterval("count()",1000);
	</script>
</head>
<body>
<center>
<?php
	require_once('head.php');
	require_once('db.php');
	$obj=new db();
	$db=$obj->conn('emp');
	$act=$_GET['act'];
	$id=@$_GET['id'];
	switch($act){
		case 'del':
		$stmt=$db->prepare("delete from emp where id=?");
		$stmt->execute(array($id));
		// header('location:emplist.php');
		header("refresh:3;url=emplist.php");
		echo "删除成功!<br>";
		echo "<span id='second'>5</span>秒后自动返回……<br>";
		echo "<a href='javascript:window.history.back()'>立即返回</a>";

		break;

		case 'update':
		$name=$_POST['name'];
		$grade=$_POST['grade'];
		$email=$_POST['email'];
		$salary=$_POST['salary'];
		$stmt=$db->prepare("update emp set name=?,grade=?,email=?,salary=? where id=?");
		if($stmt->execute(array($name,$grade,$email,$salary,$id))){
			echo "更新成功！<br>";
			echo "<span id='second'>5</span>秒后返回到员工列表页……<br>";
			echo "<a href='emplist.php'>立即返回</a>";
		}
		break;

		case 'add':
		$name=$_POST['name'];
		$grade=$_POST['grade'];
		$email=$_POST['email'];
		$salary=$_POST['salary'];
		$stmt=$db->prepare("insert into emp(name,grade,email,salary) values(?,?,?,?)");
		if($stmt->execute(array($name,$grade,$email,$salary))){
			echo "添加成功！<br>";
			echo "<span id='second'>5</span>秒后返回到员工列表页……<br>";
			echo "<a href='emplist.php'>立即返回</a>";
		}
		break;


		

	}


?>
</center>	
</body>
</html> 

