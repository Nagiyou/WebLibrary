<?php
     $conn=mysql_connect("localhost","root","111") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("db_database29",$conn) or die("���ݿ���ʴ���".mysql_error());
     mysql_query("set names gb2312");
?>
