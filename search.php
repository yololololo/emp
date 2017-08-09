<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>查询</title>
	</style>
<script type="text/javascript">
 function dodel(id){
 	if(confirm("确定要删除吗？")){
 		window.location="action.php?act=del&id="+id;
 	}
 }
</script>
</head>
<body>
<center>
<?php require_once('head.php');?>
<h3>查询员工</h3>
<form action="search.php" method="get">
name:<input type="text" name="name">
grade:<input type="text" name="grade">
email:<input type="text" name="email">
salary:<input type="text" name="salary">
<input type="submit" value="搜索">
<br><br>
</form>
<table width="600" style="border-collapse:collapse;" border="1">
				<tr bgcolor="#ccc">
					<th>ID</th><th>name</th><th>grade</th>
					<th>email</th><th>salary</th>
					<th>操作</th>
				</tr>
<?php
if(!empty($_GET)){
	$list=array();
if(!empty($_GET['name'])){
	$list[]="name like '%".$_GET['name']."%'";
}
if(!empty($_GET['grade'])){
	$list[]="grade like '%".$_GET['grade']."%'";
}
if(!empty($_GET['email'])){
	$list[]="email like '%".$_GET['email']."%'";
}
if(!empty($_GET['salary'])){
	$list[]="salary like '%".$_GET['salary']."%'";
}
//用and将数组合并为字符串
if(count($list>0)){
	 $condition=" where ".implode(' and ',$list);
}
//连接数据库
require_once('db.php');
$obj=new db();
$db=$obj->conn('emp');
// 拼装sql语句
$sql="select * from emp".$condition;
 $res=$db->query($sql);
 $rows=$res->fetchAll();
 if(count($rows)>0){
 	echo "共有".count($rows).'条搜索结果';
 	foreach($rows as $row){
 	echo "<tr align='center'>";
	echo "<td>{$row['id']}</td>";
	echo "<td>{$row['name']}</td>";
	echo "<td>{$row['grade']}</td>";
	echo "<td>{$row['email']}</td>";
	echo "<td>{$row['salary']}</td>";
	echo "<td align='center'><a href='javascript:dodel({$row[0]})' style='text-decoration:none;'>删除</a> | <a href='edit.php?act=edit&id={$row[0]}' style='text-decoration:none;'>修改</a></td>";
	echo "</tr>";
 }
 }else{
	echo '共有0条搜索结果';
}
 
}
?>
</table>
</center>	
</body>
</html>