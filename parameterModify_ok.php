<?php 
include("conn/conn.php");
if($_POST[Submit]!=""){
$cost=$_POST[cost];
$validity=$_POST[validity];
$sql=mysql_query("update tb_parameter set cost='$cost',validity='$validity'");
if($sql==true){
	echo"<script language='javascript'>alert('�޸ĳɹ���');window.location.href='parameter_modify.php';</script>";
}else{
	echo"<script language='javascript'>alert('�޸�ʧ�ܣ�');window.location.href='parameter_modify.php';</script>";
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
