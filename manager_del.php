<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("delete from tb_manager where id='$id'");
$query=mysql_query("delete from tb_purview where id='$id'");
if($sql==true and $query==true ){
echo "<script language=javascript>alert('�û�ɾ���ɹ���');history.back();</script>";
}
else{
echo "<script language=javascript>alert('�û�ɾ��ʧ�ܣ�');history.back();</script>";
}
?>

