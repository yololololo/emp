<?php
session_start();
unset($_SESSION['id']);
session_destroy();
// echo "bye bye~";
// header("location:login.php");
?>
<script type="text/javascript">
alert('bye bye~');
window.location="login.php";
</script>

