<?php
include("Conn/conn.php");
$info_del=mysql_query("delete from tb_bookinfo where id=$_GET[id]");
if($info_del){
    echo "<script language='javascript'>alert('ͼ����Ϣɾ���ɹ�!');history.back();</script> ";
}
?>