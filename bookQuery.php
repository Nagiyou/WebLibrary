<?php session_start();?>
<html>
<head>
<title>ͼ��ݹ���ϵͳ</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<body>
<table width="776" border="0" align="center" cellpadding="0" cellspacing="0" class="tableBorder">
  <tr>
    <td>
	<?php include ("navigation.php"); ?>
	</td>
	</tr>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" bgcolor="#FFFFFF"><table width="99%" height="510"  border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="tableBorder_gray">
  <tr>
    <td height="510" align="center" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top">
	      <table width="723" height="37" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td background="Images/dangan.gif">&nbsp;</td>
            </tr>
          </table>
	      <form  name="form1" method="post" action="">
	        <table width="98%" height="38"  border="1" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#9ECFEE" class="tableBorder_gray">
  <tr>
    <td align="center">
&nbsp;<img src="Images/search.gif" width="37" height="29"></td>
    <td>&nbsp;&nbsp;��ѡ���ѯ���ݣ�
      <select name="f" class="wenbenkuang" id="f">
        <option value="<?php echo "b.barcode";?>">������</option>
        <option value="<?php echo "t.typename";?>">���</option>
        <option value="<?php echo "b.bookname";?>" selected>����</option>
        <option value="<?php echo "b.author";?>">����</option>
        <option value="<?php echo "p.pubname";?>">������</option>
        <option value="<?php echo "c.name";?>">���</option>
                  </select>
      <input name="key1" type="text" id="key1" size="50">
      <input name="Submit" type="submit" class="btn_grey" value="��ѯ"></td>
  </tr>
</table>
</form>
<?php 
include("conn/conn.php");
$query=mysql_query("select b.*,c.name as bookcasename,p.pubname,t.typename from tb_bookinfo b left join tb_bookcase c on b.bookcase=c.id join tb_publishing p on b.ISBN=p.ISBN join tb_booktype t on b.typeid=t.id");
$result=mysql_fetch_array($query);
if($result==false){
?>
          <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td height="36" align="center">����ͼ����Ϣ��</td>
            </tr>
          </table>
<?php
 }
 else{
 ?>		  
  <table width="98%"  border="1" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bordercolordark="#D2E3E6" bordercolorlight="#FFFFFF">
  <tr align="center" bgcolor="#D0E9F8">
    <td width="13%">������</td>  
    <td width="26%">ͼ������</td>
    <td width="15%">ͼ������</td>
    <td width="14%">������</td>
    <td width="12%">���</td>
  </tr>
<?php
if($_POST[key1]==""){
do{
?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $result[barcode];?></td>  
    <td style="padding:5px;"><a href="book_look.php?id=<?php echo $result[id]; ?>"><?php echo $result[bookname];?></a></td>
    <td style="padding:5px;">&nbsp;<?php echo $result[typename];?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $result[pubname];?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $result[bookcasename];?></td>  
    </tr>
<?php
	}while($result=mysql_fetch_array($query));
}else{
$f=$_POST[f];
$key1=$_POST[key1];
$sql=mysql_query("select b.*,c.name as bookcasename,p.pubname,t.typename from tb_bookinfo b left join tb_bookcase c on b.bookcase=c.id join tb_publishing p on b.ISBN=p.ISBN join tb_booktype t on b.typeid=t.id where $f like '%$key1%'");
$info=mysql_fetch_array($sql);
if($info==true){
do{
?>
  <tr>
    <td style="padding:5px;">&nbsp;<?php echo $info[barcode]; ?></td>  
    <td style="padding:5px;"><a href="book_look.php?id=<?php echo $info[id]; ?>"><?php echo $info[bookname]; ?></a></td>
    <td style="padding:5px;">&nbsp;<?php echo $info[typename]; ?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $info[pubname]; ?></td>  
    <td style="padding:5px;">&nbsp;<?php echo $info[bookcasename]; ?></td>  
    </tr>
<?php
}while($info=mysql_fetch_array($sql));
}else{
?>
    <table width="100%" height="30"  border="0" cellpadding="0" cellspacing="0">
       <tr>
         <td height="36" align="center">��������ͼ����Ϣ�����ڣ������¼�����</td>
       </tr>
    </table>
<?php
}
}
}
?>  
</table></td>
      </tr>
    </table></td>
  </tr>
</table><?php include("copyright.php");?></td>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
