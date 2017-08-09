<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加</title>
</head>
<body>
<center>
<?php
require_once('head.php');
?>
<h3>添加员工</h3>
<form action="action.php?act=add" method="post">
<table border="0" cellspacing="4">
<tr><td align="right">name:</td><td><input type='text' name='name'></td></tr>
<tr><td align="right">grade:</td><td><input type='text' name='grade'></td></tr>
<tr><td align="right">email:</td><td><input type='text' name='email'></td></tr>
<tr><td align="right">salary:</td><td><input type='text' name='salary'></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="提交">
<input type="reset" value="重置"></td></tr>
</table>
</form>
</center>
</body>
</html>