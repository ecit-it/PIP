<?php
 session_start();
 if($_SESSION[unc]==""){
    echo "<script>alert('���ȵ�¼���������λ!');history.back();</script>";
	exit;
  }
?>
<?php
 include("top.php");
?>
<table width="870" height="101" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="561" height="101" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
    </table>
      <table width="865" border="1" align="center" cellpadding="0" cellspacing="0">
        <form name="form1" method="post" action="gouwu1.php">
          <tr>
            <td width="865" height="5" background="images/cart.gif"></td>
          </tr>
          <tr>
            <td  bgcolor="#0000FF"><table width="855" border="0" align="center" cellpadding="0" cellspacing="1">
                <?php
			  session_register("total");
			  if($_GET[qk]=="yes"){
			     $_SESSION[producelist]="";
				 $_SESSION[quatity]=""; 
			  }
			   $arraygwc=explode("@",$_SESSION[producelist]);
			   $s=0;
			   for($i=0;$i<count($arraygwc);$i++){
			       $s+=intval($arraygwc[$i]);
			   }
			  if($s==0 ){
				   echo "<tr>";
                   echo" <td height='25' colspan='6' bgcolor='#FFFFFF' align='center'>����û��ѡ���λ!</td>";
                   echo"</tr>";
				}
			  else{ 
			?>
                <tr>
                  <td width="165" height="25" bgcolor="#FFFFFF"><div align="center">��λ����</div></td>
                  <td width="208" bgcolor="#FFFFFF"><div align="center">���뿪ʼʱ��</div></td>
                  <td width="204" bgcolor="#FFFFFF"><div align="center">�����ֹʱ��</div></td>
                  <td width="174" bgcolor="#FFFFFF"><div align="center">����</div></td>
                </tr>
                <?php
			    $total=0;
			    $array=explode("@",$_SESSION[producelist]);
				$arrayquatity=explode("@",$_SESSION[quatity]);
				 while(list($name,$value)=each($_POST)){
					  for($i=0;$i<count($array)-1;$i++){
					    if(($array[$i])==$name){
						  $arrayquatity[$i]=$value;  
						}
					}
				}
			    $_SESSION[quatity]=implode("@",$arrayquatity);
				
				for($i=0;$i<count($array)-1;$i++){ 
				   $id=$array[$i];
				   $num=$arrayquatity[$i];
				  
				  if($id!=""){
				   $sql=mysql_query("select * from tb_gouwu where id='".$id."'",$conn);
				   $info=mysql_fetch_array($sql);
				   $total1=$info[huiyuanjia];
				   $total+=$total1;
				   $_SESSION["total"]=$total;
			?>
                <tr>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[mingcheng];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shichangjia];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[huiyuanjia];?></div></td>
                  <td height="25" bgcolor="#FFFFFF"><div align="center"><a href="removegwc.php?id=<?php echo $info[id]?>">�Ƴ�</a></div></td>
                </tr>
                <?php
			      }
				 }
			 ?>
                <tr>
                  <td height="25" colspan="8" bgcolor="#FFFFFF"><div align="right">
                      <table width="500" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="125"><div align="center">
                              <input type="button" value="����" class="buttoncss" onClick="javascript:history.back();">
							  <input name="submit2" type="submit" class="buttoncss" value="ˢ��">
                          </div></td>
                          <td width="125"><div align="center"><a href="gouwu2.php">ȥ����������</a></div></td>
                          <td width="125"><div align="center"><a href="gouwu1.php?qk=yes">�����ѡ��λ</a></div></td>
                          
                        </tr>
                      </table>
                  </div></td>
                </tr>
                <?php
			 }
			?>
            </table></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>