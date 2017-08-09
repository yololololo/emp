<style>
a{text-decoration: none;}
</style>
<script type="text/javascript">
 function dodel(id){
 	if(confirm("确定要删除吗？")){
 		window.location="action.php?act=del&id="+id;
 	}
 }
</script>
<?php
require_once('db.php');
	function fenye($pg_size){
	$obj=new db('emp');
	$db=$obj->conn('emp');
	echo "<table width='600' border='1' style='border-collapse:collapse;'><tr bgcolor='#ccc'>";
	$sql="show columns from emp";
	$res=$db->query($sql);
	$rows=$res->fetchAll(PDO :: FETCH_ASSOC);
	foreach($rows as $v){
		
		echo "<th>{$v['Field']}</th>";
		
		
	}
	echo "<th>操作</th>";
	echo "</tr>";
	$pg_now=@$_GET['pg_now']?$_GET['pg_now']:1;
	$offset=($pg_now-1)*$pg_size;//每页的起始值
	$sql="select count(*) from emp";
	$row_total=$db->query("select count(*) from emp")->fetchColumn();//总记录数
	$pg_total=ceil($row_total/$pg_size);//总页数
	$sql="select * from emp limit ".$offset.','.$pg_size;
	$stmt=$db->prepare($sql);
	$stmt->execute();
	while($row=$stmt->fetch(PDO :: FETCH_NUM)){
		echo "<tr>";
		for($i=0;$i<count($row);$i++){
			echo "<td align='center'>$row[$i]</td>";
		}
		echo "<td align='center'><a href='javascript:dodel({$row[0]})'>删除</a> | <a href='edit.php?act=edit&id={$row[0]}'>修改</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br>";
	echo " &nbsp;&nbsp;&nbsp;&nbsp;";
	$url=$_SERVER['PHP_SELF'];
	if($pg_now==1){
		echo " <font size='4'>上一页</font> &nbsp;&nbsp;";
	}else{
		$pre_pg=$pg_now-1;
		echo " <font size='4'><a href='{$url}?pg_now={$pre_pg}'>上一页</a></font> &nbsp;&nbsp;";
	}
	for($i=1;$i<=$pg_total;$i++){
		echo "  <font size='5'> [<a href='{$url}?pg_now={$i}'>{$i}</a>] </font> ";
	}
	if($pg_now==$pg_total){
		echo " &nbsp;&nbsp;<font size='4'> 下一页 </font> ";
	}else{
		$next_pg=$pg_now+1;
		echo " &nbsp;&nbsp;<font size='4'><a href='{$url}?pg_now={$next_pg}'>下一页</a></font> ";
	}
	echo " &nbsp;&nbsp;当前页".$pg_now.'/'.'共'.$pg_total.'页';
	
	}
