
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�û���Ϣ����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_user where id=".$id."",$conn);
$info=mysql_fetch_array($sql);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">�û���Ϣ�鿴</div></td>
  </tr>
  <tr>
    <td height="98" bgcolor="#666666"><table width="650" border="0" align="center" cellpadding="0" cellspacing="1">
      <!--DWLayoutTable-->
      <tr>
        <td width="99" height="20" bgcolor="#FFFFFF"><div align="center">�û��ǳƣ�</div></td>
        <td width="180" bgcolor="#FFFFFF"><div align="left"><?php echo $info[usernc];?></div></td>
        <td width="100" bgcolor="#FFFFFF"><div align="center">�û�״̬��</div></td>
        <td width="266" bgcolor="#FFFFFF"><div align="left"><?php
	 if($info[dongjie]==0)
	  {
	    echo "�Ƕ���״̬";
	  }
	  else
	  { 
	   echo "����״̬"; 
	  }
		?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">��ʵ������</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[truename];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">���룺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[pwd];?></div></td>
      </tr>
      
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">E-mail��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[email];?></div></td>
      </tr>        
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">�Ա�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[sex];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">��ϵ�绰��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[tel];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">QQ���룺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[qq];?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">��ͥסַ��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[address];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">��½������</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[logintimes];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">ע��ʱ�䣺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[regtime];?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">����½ʱ�䣺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[lastlogintime];?></div></td>
      </tr>
      <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">IP�ţ�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[ip];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">�û����ͣ�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[usertype];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">�������⣺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[question];?></div></td>
      </tr>
	  <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">������ʾ�𰸣�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[answer];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">��ʵ���룺</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[truepwd];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">ѧУ��</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[school];?></div></td>
      </tr>
        <tr>
        <td height="20" bgcolor="#FFFFFF"><div align="center">�������ڳ��У�</div></td>
        <td colspan="3" bgcolor="#FFFFFF"><div align="left"><?php echo $info[city];?></div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="20"><div align="center"><a href="dongjieuser.php?id=<?php echo $id;?>">
	<?php
	 $sql=mysql_query("select * from tb_user where id=".$id."",$conn);
	 $info=mysql_fetch_array($sql);
	 if($info[dongjie]==0)
	  {
	    echo "������û�";
	  }
	  else
	  {
	    echo "�������";
	  }
	?></a></div></td>
  </tr>
</table>
</body>
</html>
