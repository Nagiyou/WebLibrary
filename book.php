<?php session_start();?>
<html>
<head>
<title>ͼ��ݹ���ϵͳ</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
    <?php include("navigation.php");?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" valign="top" style="padding:5px;"><table width="98%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">��ǰλ�ã�ͼ����� &gt; ͼ�鵵������ &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top">
		<?php
		include("Conn/conn.php");
		$query=mysql_query("select book.barcode,book.id as bookid,book.bookname,bt.typename,pb.pubname,bc.name from tb_bookinfo book join tb_booktype bt on book.typeid=bt.id join tb_publishing pb on book.ISBN=pb.ISBN join tb_bookcase bc on book.bookcase=bc.id");
		$result=mysql_fetch_array($query);
        if($result==false){
		?> 
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">����ͼ����Ϣ��</td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>
      <a href="book_add.php">���ͼ����Ϣ</a> </td>
  </tr>
</table>
 <?php
}else{
?>
 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="87%">&nbsp;      </td>
	<td width="13%">
      <a href="book_add.php">���ͼ����Ϣ</a></td>	  
  </tr>
</table>  
  <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#e3F4F7">
    <td width="13%">������</td>  
    <td width="26%">ͼ������</td>
    <td width="15%">ͼ������</td>
    <td width="14%">������</td>
    <td width="12%">���</td>
    <td width="6%">�޸�</td>
    <td width="5%">ɾ��</td>
  </tr>
<?php do{ ?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $result[barcode];?></td>  
    <td style="padding:5px;"><a href="book_look.php?id=<?php echo $result[bookid];?>"><?php echo $result[bookname];?></a></td>
    <td style="padding:5px;">&nbsp;<?php echo $result[typename];?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $result[pubname];?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $result[name];?></td>  
    <td align="center"><a href="book_Modify.php?id=<?php echo $result[bookid];?>">�޸�</a></td>
    <td align="center"><a href="book_del.php?id=<?php echo $result[bookid];?>">ɾ��</a></td>
  </tr>
<?
  }while($result=mysql_fetch_array($query));
}
?>  
</table></td>
      </tr>
    </table>
</td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
