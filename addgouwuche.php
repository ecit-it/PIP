<?php
session_start();
include("conn/conn.php");
if($_SESSION[unc]==""){
  echo "<script>alert('请先登录后再申请岗位!');history.back();</script>"; 
  exit;
 }
$id=strval($_GET[id]);
$sql=mysql_query("select * from tb_gouwu where id='".$id."'",$conn); 
$info=mysql_fetch_array($sql);
if($info[shuliang]<=0){
   echo "<script>alert('该岗位已经申请完!');history.back();</script>";
   exit;
 }
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++){
	 if($array[$i]==$id){
	     echo "<script>alert('您已经选择了该岗位，请勿重复选择!');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  header("location:gouwu1.php");
?> 