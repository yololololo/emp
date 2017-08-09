<html>
<head>
<title>main</title>
</head>
<body>
<center>
<?php
require_once('head.php');
require_once('common.php');
//检查是否为合法用户
checkUserLegal();
//获取上次登录时间
getLastTime();
echo "<br>";
echo "欢迎登录：".$_GET['user'];
?>
</center>
</body>
</html>