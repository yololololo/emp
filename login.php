<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>雇员管理系统</title>
</head>
<body>
<?php require_once('common.php'); ?>
<center>
<h1>欢迎登陆</h1>
<form action="p_login.php" method="post">
<table>
<tr><td align="right">用户名：</td><td><input type="text" name="user" value="<?php echo getcookie('user'); ?>"></td></tr>
<tr><td align="right">密码：</td><td><input type="text" name="pass"></td></tr>
<tr><td colspan="2" align="center">savecookie:<input type="checkbox" name="cookie"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="sub" value="登陆"></td></tr>
</table>
</form>

<?php
if(@$errno=$_GET['errno']){
if($errno==1){
	echo "<h3><font color='red'>errno".$errno."：非法用户</font></h3>";
}elseif($errno==2){
	echo "<h3><font color='red'>errno".$errno."：用户名或密码错误</font></h3>";
}	
}
?>

</center>
</body>
</html>
