<?php include_once("top.php"); //��ȡͷ���ļ� ?>
<table width="766" height="280" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="581" height="280" align="center" valign="top" bgcolor="#FFFFFF"><table width="561" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="571" height="50" background="images/qiantai/tuijian1.gif">&nbsp;</td>
      </tr>
    </table>
      <table width="870" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/qiantai/line1.gif"></td>
        </tr>
      </table>
      <?php
	   $sql=mysql_query("select count(*) as total from tb_gouwu where tuijian=1 ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "��վ�����Ƽ���λ!";
	   }
	   else
	   {
	  
	  ?>
      <table width="853" height="70" border="1" align="center" cellpadding="0" cellspacing="0">
        <?php
 
    
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			
			}else{
			   $pagecount=$total/$pagesize;
			
			}
			if(($_GET[page])==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET[page]);
			
			}
			 
             $sql1=mysql_query("select * from tb_gouwu where tuijian=1 order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="139"  rowspan="6"><div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "����ͼƬ!";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info1[id];?>" ><img  border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="122" height="20"><div align="center" style="color: #000000">��λ���ƣ�</div></td>
          <td colspan="5"><div align="left"> <a href="lookinfo.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="122" height="20"><div align="center" style="color: #000000">��λ������Ŀ��</div></td>
          <td width="96" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="118"><div align="center" style="color: #000000">��λ��ţ�</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="122" height="20"><div align="center" style="color: #000000">��λ��飺</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">�������ڣ�</div></td>
          <td height="20"><div align="left"><?php echo $info1[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">ʣ��������</div></td>
          <td width="113" height="20"><div align="left"><?php echo $info1[shuliang];?></div></td>
          <td width="126"><div align="center" style="color: #000000">��λ�ȼ���</div></td>
          <td width="139"><div align="left"><?php echo $info1[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">��ʼʱ�䣺</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?></div></td>
          <td height="20"><div align="center" style="color: #000000">��ֹʱ�䣺</div></td>
          <td height="20"><div align="left"><?php echo $info1[huiyuanjia];?></div></td>
          <td height="20"><div align="center" style="color: #000000"></div></td>
          <td height="20"><div align="left"></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addgouwuche.php?id=<?php echo $info1[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/qiantai/line1.gif"></td>
        </tr>
        <?php
	    }
		
		?>
      </table>
      <table width="846" height="36" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="846" height="36"><div align="center">��վ�����Ƽ���λ&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showtuijian.php?page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="showtuijian.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showtuijian.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showtuijian.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showtuijian.php?page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="showtuijian.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	    }
		
		?></td>
  </tr>
  <tr width="870" bgcolor="#0000FF">
            <td align="center"><a href="gouwu1.php"><img src="images/bg_14(10).jpg" width="69" height="20" alt="�ύȫ����ѡ����" longdesc="http://gouwu1.php" /></a></td></tr>
</table>
<?php
include_once("bottom.php");
?>