<?php
session_start();
if($_SESSION[unc]==""){
	echo "<script>alert('�Բ��𣬱���վ��Ҫ�����û���¼����֤������ʵ���!�����û��ע�ᣬ����ע�ᣡ');window.location.href='registerbegin.php';</script>";
	exit();
}
?>

