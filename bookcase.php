<?php include("navigation.php");?>
<html>
<head>
<title>ͼ��ݹ���ϵͳ</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">��ǰλ�ã�ϵͳ���� &gt; ������� &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
<?php
include("conn/conn.php");       //��������Դ��Ϣ
$sql=mysql_query("select * from tb_bookcase order by id desc");      //��ѯͼ�������Ϣ���е�������Ϣ
$info=mysql_fetch_array($sql);      //ִ��SQL���
if($info==false){      //���ͼ�������Ϣ����Ϊ��ֵ���򵯳������������Ϣ��
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">���������Ϣ��</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="#" onClick="window.open('bookcase_add.jsp','','width=292,height=175')">��������Ϣ</a> </td>
  </tr>
</table>
 <?
}else{   //������������Ϣ
  ?>
 <table width="91%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="84%">&nbsp;      </td>
<td width="16%" align="right">
      <a href="#" onClick="window.open('bookcase_add.php','','width=292,height=175')">��������Ϣ&nbsp;</a> </td>	  
  </tr>
</table>  
  <table width="91%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="84%">�������</td>
    <td width="16%">ɾ��</td>
  </tr>
<?php
	do{    //Ӧ��do...whileѭ��������ͼ�������Ϣ
?> 
  <tr>
    <td style="padding:5px;"><?php echo $info[name];?></td>
    <td align="center"><a href="bookcase_del.php?id=<?php echo $info[id];?>">ɾ��</a></td>
  </tr>
<?
  }while($info=mysql_fetch_array($sql));          //do...whileѭ��������
}
?>  
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table>
<?php include("copyright.php");?>
</td>
  </tr>
</table>
</body>
</html>
