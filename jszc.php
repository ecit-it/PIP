<?php include_once("top.php"); //��ȡͷ���ļ�  
  include_once("conn/conn.php")
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="javascript">
  function ld(){
    init();
  }
</script>
<body onLoad="ld()">
<table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="870" align="center" valign="top">
<table width="870" border="0" cellspacing="0" cellpadding="0">
          <td width="870" height="30" valign="middle" background="images/bg_14(1).jpg"><table width="870">
            <tr>
              <td width="20" rowspan="2">&nbsp;</td>
              <td width="517" height="3"></td>
              <td width="122" rowspan="2">&nbsp;</td>
            <tr>
              <td><a href="jszc.php?jszc=����" class="a2">����</a>&nbsp;<a href="jszc.php?jszc=�ͻ�����" class="a2">�ͻ�����</a>&nbsp;<a href="jszc.php?jszc=��ϵ��ʽ" class="a2">��ϵ��ʽ</a></td>
            </table></td>
        </tr>
        <tr>
          <td  width="870" align="center" valign="top">
   <table width="642" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">
<?php 
switch($jszc){
  case "����":
      include("help.php");
  break;
  case "�ͻ�����":
      include("khfk.php");
  break;
  case "��ϵ��ʽ":
      include("lxfs.php");
  break;
   case "":
      include("help.php");
  break;
}
?></td>
        </tr></table>
          </td>
        </tr>
      </table>
</td>
  </tr>
</table>
</body>
</html>
<?php
include_once("bottom.php");
?>