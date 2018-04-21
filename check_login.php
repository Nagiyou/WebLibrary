<?php
session_start();
if($_SESSION[admin_name]==""){
	echo "<script>alert('请通过正确的途径登录华中农业大学图书馆管理系统!');window.location.href='login.php';</script>";
}
?>
