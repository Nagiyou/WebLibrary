<?php
session_start();
include("conn/conn.php");
$backTime=date("Y-m-d");        //�黹ͼ������
$borrid=$_GET[borrid];
mysql_query("update tb_borrow set backTime='$backTime',ifback=1,operator='$_SESSION[admin_name]' where id=$borrid");
echo "<script language='javascript'>alert('ͼ��黹�����ɹ���');window.location.href='bookBack.php?barcode=$barcode';</script>";
?>