<?php
 include("conn/conn.php");
 $title=$_POST[title];
 $content=$_POST[content];
 $time=date("Y-m-j");
 mysql_query("insert into tb_tell (title,content,createtime) values ('$title','$content','$time')",$conn);
 echo "<script>alert('������ӳɹ�!');history.back();</script>";
?>