<?php
session_start();
if($_SESSION[admin_name]==""){
	echo "<script>alert('��ͨ����ȷ��;����¼����ũҵ��ѧͼ��ݹ���ϵͳ!');window.location.href='login.php';</script>";
}
?>
