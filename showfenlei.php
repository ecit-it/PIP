<?php include_once("top.php"); //��ȡͷ���ļ� ?>
<table width="870" height="270" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
   
    <td width="870" height="266" align="center" valign="top" bgcolor="#FFFFFF"><table width="870" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left"> 
                <?php 
		  
		    $sql=mysql_query("select * from tb_type order by id desc",$conn);
		    $info=mysql_fetch_object($sql);
			if($info==false)
			{
			  echo "��վ���޸�λ!";
			}
		    else 
			{echo"<br><div>..................................................<font color=red>��λ����б�</font></div><br>";
			  do
			  {
			    echo "........................................<font color=red>&nbsp;&nbsp;��&nbsp;&nbsp;</font><a href='showfenlei.php?id=".$info->id."'>".$info->typename."<br></a>";
			  
			   }while($info=mysql_fetch_object($sql)); 
		    }
		  ?>
        </div></td>
      </tr>
    </table>
      <?php
	   if($_GET[id]=="")
	   {
	     $sql=mysql_query("select * from tb_type order by id desc limit 0,1",$conn);
		 $info=mysql_fetch_array($sql);
		 $id=$info[id];
	   }
	   else
	   {
         $id=$_GET[id];
	   }
	   $sql1=mysql_query("select * from tb_type where id=".$id."",$conn);
	   $info1=mysql_fetch_array($sql1);
	   
       $sql=mysql_query("select count(*) as total from tb_gouwu where typeid='".$id."' order by addtime desc ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0)
	   {
	     echo "<div align='center'>��վ���޸����λ!</div>";
	   } 
	   else
	   {
	  ?>
      <table width="857" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr align="left">
          <td width="590" bgcolor="#FEE7C5"><div align="left"><span style="color: #666666; font-weight: bold"><span style="color: #000000">&nbsp;�����λ&gt;&gt;</span><?php echo $info1[typename];?></span> </div></td>
        </tr>
      </table>
      <table width="860" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="703" background="images/qiantai/line1.gif"></td>
        </tr>
      </table>
      <table width="854" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
	       $pagesize=3;
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
			 
             $sql1=mysql_query("select * from tb_gouwu where typeid=".$id." order by addtime desc limit ".($page-1)*$pagesize.",$pagesize ",$conn);
             while($info1=mysql_fetch_array($sql1))
		     {
		  ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info1[tupian]=="")
			 {
			   echo "����ͼƬ!";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info1[id];?>"><img border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">��λ���ƣ�</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info1[id];?>"><font color="FF6501"><?php echo $info1[mingcheng];?></font></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��λ������Ŀ��</div></td>
          <td width="101" height="20"><div align="left"><font color="FF6501"><?php echo $info1[pinpai];?></font></div></td>
          <td width="62"><div align="center" style="color: #000000">��λ��ţ�</div></td>
          <td colspan="3"><div align="left"><font color="FF6501"><?php echo $info1[xinghao];?></font></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">��λ��飺</div></td>
          <td height="20" colspan="5"><div align="left"><font color="FF6501"><?php echo $info1[jianjie];?></font></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">�������ڣ�</div></td>
          <td height="20"><div align="left"><font color="FF6501"><?php echo $info1[addtime];?></font></div></td>
          <td height="20"><div align="center" style="color: #000000">ʣ������:</div></td>
          <td width="69" height="20"><div align="left"><font color="FF6501"><?php echo $info1[shuliang];?></font></div></td>
          <td width="63"><div align="center" style="color: #000000">��λ�ȼ���</div></td>
          <td width="377"><div align="left"><?php echo $info1[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">��ʼʱ�䣺</div></td>
          <td height="20"><div align="left"><font color="FF6501"><?php echo $info1[shichangjia];?></font></div></td>
          <td height="20"><div align="center" style="color: #000000">��ֹʱ�䣺</div></td>
          <td height="20"><div align="left"><font color="FF6501"><?php echo $info1[huiyuanjia];?></font></div></td>
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
      <table width="847" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="834"><div align="center"> &nbsp;��վ���и����λ&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=1" title="��ҳ"><font face="webdings"> 9 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="ǰһҳ"><font face="webdings"> 7 </font></a>
        <?php
		  }
		          if($pagecount<=4){
		           for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="��һҳ"><font face="webdings"> 8 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="βҳ"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	   }
	  
	  ?>	</td>
  </tr>
  <tr width="870" bgcolor="#0000FF">
            <td align="center"><a href="gouwu1.php"><img src="images/bg_14(10).jpg" width="69" height="20" alt="�ύȫ����ѡ����" longdesc="http://gouwu1.php" /></a></td></tr>
</table>
<?php
include_once("bottom.php");
?>