<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改</title>
</head>
<body>
<center>
<?php
require_once('head.php');
require_once('db.php');
$id=$_GET['id'];
$obj=new db();
$db=$obj->conn('emp');
$stmt=$db->prepare("select * from emp where id=?");
$stmt->execute(array($id));
$row=$stmt->fetch();
?>
<h3>修改员工信息</h3>
<form action="action.php?act=update&id=<?php echo $id;?>" method="post">
<table border="0" cellspacing="4">
<tr><td align="right">name:</td><td><input type='text' name='name' 
	value='<?php echo $row["name"];?>'></td></tr>
<tr><td align="right">grade:</td><td><input type='text' name='grade' 
	value='<?php echo $row["grade"];?>'></td></tr>
<tr><td align="right">email:</td><td><input type='text' name='email' 
	value='<?php echo $row["email"];?>'></td></tr>
<tr><td align="right">salary:</td><td><input type='text' name='salary' 
	value='<?php echo $row["salary"];?>'></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="提交">
<input type="reset" value="重置"></td></tr>
</table>
</form>
</center>
</body>
</html>