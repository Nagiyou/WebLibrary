<?php
include("Conn/conn.php");
$name=$_POST[name];
$number=$_POST[number];
$query_ins=mysql_query("insert into tb_readertype(name,number) values('$name','$number')");
if($query_ins){
	echo "<script language='javascript'>alert('�ɹ���Ӷ������ͣ�');window.opener.location.reload();window.close();</script>";
}else{
	echo "<script language='javascript'>alert('����������Ӳ���ʧ�ܣ�');window.opener.location.reload();window.close();</script>";
}
?>