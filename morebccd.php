<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="14" rowspan="2">&nbsp;</td>
    <td width="491"></td>
</tr>
  <tr>
    <td><span class="a9">岗位分类中心</span></td>
  </tr>
</table>
<table width="870" height="279" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   
    <td width="870" height="279" align="center" valign="top" bgcolor="#FFFFFF"><table width="870" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="left"> &nbsp;
                <?php 
		  
		    $sql=mysql_query("select * from tb_type order by id desc",$conn);
		    $info=mysql_fetch_object($sql);
			if($info==false)
			{
			  echo "本站暂无岗位!";
			}
		    else 
			{
			  do
			  {
			    echo "<a href='showfenlei.php?id=".$info->id."'>".$info->typename."&nbsp;</a>";
			  
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
	     echo "<div align='center'>本站暂无该类岗位!</div>";
	   } 
	   else
	   {
	  ?>
      <table width="850" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="850" bgcolor="#FEE7C5"><div align="left"><span style="color: #666666; font-weight: bold"><span style="color: #000000">&nbsp;本类岗位&gt;&gt;</span><?php echo $info1[typename];?></span> </div></td>
        </tr>
      </table>
      <table width="848" height="8" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="848" background="images/qiantai/line1.gif"></td>
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
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info1[id];?>"><img border="0" width="80" height="80" src="<?php echo $info1[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">岗位名称：</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info1[id];?>"><?php echo $info1[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">岗位所属项目：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info1[pinpai];?></div></td>
          <td width="62"><div align="center" style="color: #000000">岗位序号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info1[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">岗位简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info1[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">发布日期：</div></td>
          <td height="20"><div align="left"><?php echo $info1[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量:</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info1[shuliang];?></div></td>
          <td width="63"><div align="center" style="color: #000000">岗位等级：</div></td>
          <td width="377"><div align="left"><?php echo $info1[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">开始时间：</div></td>
          <td height="20"><div align="left"><?php echo $info1[shichangjia];?></div></td>
          <td height="20"><div align="center" style="color: #000000">截止时间：</div></td>
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
      <table width="847" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="834"><div align="right"> &nbsp;本站共有该类岗位&nbsp;
                  <?php
		   echo $total;
		  ?>
&nbsp;个&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;个&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="showfenlei.php?id=<?php echo $id;?>&page=1" title="首页"><font face="webdings"> 9 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
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
        <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> <a href="showfenlei.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>
          </div></td>
        </tr>
      </table>
    <?php
	   }
	  
	  ?>	</td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>