<?php session_start();?>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<head>
<title>ͼ��ݹ���ϵͳ</title>
<link href="CSS/style.css" rel="stylesheet">
</head>
<script language="javascript">
function check(form){
	if(form.name.value==""){
		alert("�������������!");form.name.focus();return false;
	}
	if(form.paperNO.value==""){
		alert("������֤������!");form.paperNO.focus();return false;
	}
}
</script>
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
    <td height="510" valign="top" style="padding:5px;"><table width="98%" height="487"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="22" valign="top" class="word_orange">��ǰλ�ã����߹��� &gt; ���ߵ������� &gt; �޸Ķ�����Ϣ &gt;&gt;&gt;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><table width="100%" height="493"  border="0" cellpadding="0" cellspacing="0">
  <tr>
<?php 
  include("conn/conn.php");
	$query=mysql_query("select * from tb_reader where id='".$_GET[id]."'");
	$result=mysql_fetch_array($query);
?>


    <td align="center" valign="top">	<form name="form1" method="post" action="reader_modifyok.php">
      <table width="600" height="432"  border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td width="173" align="center">������</td>
          <td width="427" height="39">
            <input name="name" type="text" value="<?php echo $result[name];?>">
        * 
        <input name="readerid" type="hidden" id="readerid" value="<?php echo $result[id];?>"></td>
        </tr>
        <tr>
          <td width="173" align="center">�Ա�</td>
          <td height="35">
		  <input name="sex" type="radio" class="noborder" id="radiobutton"  value="��" <?php if($result[sex]=="��"){?> checked <?php }?>>��
          <input name="sex" type="radio" class="noborder" value="Ů" <?php if($result[sex]=="Ů"){?> checked <?php }?>>Ů
		</td>
        </tr>
        <tr>
          <td align="center">�����룺</td>
          <td><input name="barcode" type="text" id="barcode" value="<?php echo $result[barcode];?>">
        </td>
        </tr>
        <tr>
          <td align="center">�������ͣ�</td>
          <td>
            <select name="typeid" class="wenbenkuang" id="typeid">
<?php
  $sql=mysql_query("select * from tb_readertype");
  $info=mysql_fetch_array($sql);
  do{
?>
              <option value="<?php echo $info[id];?>" <?php if($result[typeid]==$info[id]){?> selected<?php }?>><?php echo $info[name];?></option>
              <?php
}while($info=mysql_fetch_array($sql));
?>
                        </select>
          </td>
        </tr>
        <tr>
          <td align="center">ְҵ��</td>
          <td><input name="vocation" type="text" id="vocation" value="<?php echo $result[vocation];?>"></td>
        </tr>
        <tr>
          <td align="center">�������ڣ�</td>
          <td><input name="birthday" type="text" id="birthday" value="<?php echo $result[birthday];?>"></td>
        </tr>
        <tr>
          <td align="center">��Ч֤����</td>
          <td>
		<select name="paperType" class="wenbenkuang" id="paperType">
             <option value="���֤" <?php if($result[paperType]=="���֤"){?> selected <?php }?>>���֤</option>
              <option value="ѧ��֤" <?php if($result[paperType]=="ѧ��֤"){?>  selected <?php }?>>ѧ��֤</option>
              <option value="����֤" <?php if($result[paperType]=="����֤"){?>  selected <?php }?>>����֤</option>
              <option value="����֤" <?php if($result[paperType]=="����֤"){?>  selected <?php }?>>����֤</option>
         </select></td>
        </tr>
        <tr>
          <td align="center">֤�����룺</td>
          <td><input name="paperNO" type="text" id="paperNO" value="<?php echo $result[paperNO];?>">
        * </td>
        </tr>
        <tr>
          <td align="center">�绰��</td>
          <td><input name="tel" type="text" id="tel" value="<?php echo $result[tel];?>"></td>
        </tr>
        <tr>
          <td align="center">E-mail��</td>
          <td><input name="email" type="text" id="email" value="<?php echo $result[email];?>" size="50">
                        </td>
        </tr>
        <tr>
          <td align="center">��ע��</td>
          <td><textarea name="remark" cols="50" rows="5" class="wenbenkuang" id="remark"><?php echo $result[remark];?></textarea></td>
        </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td><input name="Submit" type="submit" class="btn_grey" value="����" onClick="return check(form1)">
&nbsp;
        <input name="Submit2" type="button" class="btn_grey" value="����" onClick="history.back()"></td>
        </tr>
      </table>
    </form></td>
  </tr>
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
