<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>大学生实习平台</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="css/SpryTabbedPanels.js" type="text/javascript"></script>
<script src="css/SpryAccordion.js" type="text/javascript"></script>
<link href="css/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="css/SpryAccordion.css" rel="stylesheet" type="text/css" />
<?php include("jspscpljdt.php"); ?>
<table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr><div id="TabbedPanels1" class="TabbedPanels" align="center">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">关于我们 </li>
      <li class="TabbedPanelsTab" tabindex="0">公告</li>
      <li class="TabbedPanelsTab" tabindex="0">论坛</li>
      <li class="TabbedPanelsTab" tabindex="0">友情链接</li>
      <li class="TabbedPanelsTab" tabindex="0">行业资讯</li>
      </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
  <p>关于职业规划：</p>
  <p>一边是旺盛的行业人才需求；一边是未经人世的莘莘学子。一边是急需匆匆上马的战场，一边是渴望高高飞翔的迷茫。我们需要专家指点迷津，分析潜力、定位去向。我们需要师傅带路，汲取经验，快速实现梦想。就业也好，创业也罢，都是劳动的权利和责任。世界属于未来，未来属于你们，我们伴您舞动。我们将为您提供免费的职业规划专题讲堂。敬请关注相关资讯发布。</p>
  <p>关于人才物色</p>
  <p>我们依据研发项目的岗位需求，将面向高等院校，基于前期的职业规划引导，激发大学生精英就业和创新创业的志趣，物色精英和创业人才。我们物色人才的标准只有四个：志向、潜力、人格和基础技能。详细项目岗位人才需求，参见招聘信息发布。</p>
  <a href="##" class="nikon_link">##技术有限公司</a></div>
      <div class="TabbedPanelsContent">
        <div id=marquees >
        
          <?php
					  $sql=mysql_query("select id,title,createtime,content from tb_tell order by createtime desc limit 0,9",$conn);
					  $info=mysql_fetch_array($sql);
					  if($info==false){
					 ?>
          <p align="left"><a href="#" class="a4">本站暂无公告发布! </a></p>
          
          <?php
					  }else{ 
					   $i=1;
					    do{
					  ?>
          
          <p align="left"><a href="tellinfo.php?id=<?php echo $info[id];?>" class="a1">
            <?php
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
				      echo $i.".&nbsp;";
					  echo unhtml(msubstr($info[title],0,50));
			          if(strlen($info[title])>50)
			           {
			             echo " ...";
			           }				  
					  echo "[".str_replace("-","/",$info[createtime])."].......公告内容：".str_replace("-","/",$info[content]).".";
				    if($i==1)
				    {
					  echo "</font>";
					} 	  				  
					?>
            </a>  
            <?php
					   $i++;
					     }while($info=mysql_fetch_array($sql));
					   }
				?>
  </p>
          </div>        
        </div>
      <div class="TabbedPanelsContent">
        <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 0,3",$conn);
				 $infouwz=mysql_fetch_array($sqluwz);
				 if($infouwz==false){ 
				 ?>
  <p align="left">&nbsp;暂无人发贴！</p>
        
        <?php
				 }else{
				  $i=1;
				  do{
				    
				 ?>
        <p align="left"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
          <?php 
				     
				   if($i==1)
				    {
					  echo "<font color=red>";
					}
						
						
						echo unhtml(msubstr($infouwz["title"],0,40));		
						 if(strlen($infouwz["title"])>40)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]........帖子内容：".substr(str_replace("-","/",$infouwz[content]),0,30)."</font>";	
						 
					if($i==1)
				    {
					  echo "</font>";
					} 

					  ?>
          </a> </p>
        <?php
			        $i++;
				  }while($infouwz=mysql_fetch_array($sqluwz));
				 }
				 ?>
        <?php
				 $sqluwz=mysql_query("select * from tb_bbs order by createtime desc limit 3,6",$conn);
				while($infouwz=mysql_fetch_array($sqluwz)){
				 ?>
  <p align="left"><a href="bbs_lookbbs.php?id=<?php echo $infouwz["id"];?>" class="a1">
    <?php 
				     
			
						
						echo unhtml(msubstr($infouwz["title"],0,40));
						
						 if(strlen($infouwz["title"])>40)
			             {
			                echo " .";
			             }
						 echo "<font color=red>[".substr(str_replace("-","/",$infouwz[createtime]),0,10)."]........公告内容：".substr(str_replace("-","/",$infouwz[content]),0,30)."</font>";	
					  ?>
    </a> </p>            
        <?php
				  }
				 ?>
        </div>
      <div class="TabbedPanelsContent">
        <p><img src="images/image016.png" width="20" height="20" alt="##技术有限公司" title="##技术有限公司" /><a href="##" class="nikon_link">##技术有限公司1</a>&nbsp;|&nbsp; <img src="images/image016.png" width="20" height="20" alt="##技术有限公司" title="##技术有限公司" /><a href="##" class="nikon_link">##技术有限公司1</a>&nbsp;|&nbsp; <img src="images/image016.png" width="20" height="20" alt="##技术有限公司" title="##技术有限公司" /><a href="##" class="nikon_link">##技术有限公司1</a>
        </p>
        </div>
       <div class="TabbedPanelsContent">
		 <div id="Accordion1" class="Accordion" tabindex="0">
   			<div class="AccordionPanel">
     		<div class="AccordionPanelTab">教育资讯</div>
     	<div class="AccordionPanelContent">
<p align="left"><a href="http://hb.qq.com/a/20120616/000598.htm">·教师教育国际论坛在武汉举办共论教师培养模式[2012年06月16日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120530/000455.htm">·武汉一大学公选副校长面试竞聘者演讲飙英语[2012年05月30日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000438.htm">·武汉大学生情侣实名出镜校园爱情短片爆红网络[2012年05月30日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000340.htm">·湖北考生将迎史上最严高考带手机进考场算作弊[2012年05月30日]</a> </p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000614.htm">·武汉高考62个考点"分布图"出炉 比去年减少1个[2012年05月29日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000540.htm">·武大原校长"把脉"高校改革 "高等教育犯狂躁病"[2012年05月29日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120529/000529.htm">·武大4女生创意毕业照 披白色婚纱告别大学生活[2012年05月29日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120528/000420.htm">·武汉大学生"抱抱团"闹市中拥抱传递温暖 拒冷漠[2012年05月28日]</a></p>
<p align="left"><a href="http://hb.qq.com/a/20120528/000343.htm">·湖北高考生将"试水"新高考 进场只能带"两证"[2012年05月28日]</a></p>
</div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">政策资讯</div>
     <div class="AccordionPanelContent">
     <p align="left"><a href="http://finance.people.com.cn/GB/10338501.html">·中国楼市政策走向待解 房贷利率优惠政策或停止 [11月08日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/164305/9961384.html">·"双薪"不再作为月薪计个税 [09月01日]</a></p>
<p align="left"><a href="http://www.people.com.cn/GB/98384/99153/9961347.html">·广州个人受赠房屋三种情形免税 [09月01日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/164305/9961243.html">·国税总局：个人因离婚办房产过户手续不征个税 [09月01日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/98384/99153/9941932.html">·北京：住宅维修资金拟禁风险投资 [08月27日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/98384/99153/9941896.html">·北京：九月重点检查保障房质量 [08月27日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940291.html">·今后北京市业主不交专项维修资金或不能收房 [08月27日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940128.html">·北京住宅维修金将明确按面积楼层缴存 [08月27日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9940124.html">·开发商称收费过高是高房价主因 仅三成网友认同 [08月27日]</a></p>
<p align="left"><a href="http://house.people.com.cn/GB/9936030.html">·住建部将首度摸底限价房及公租房情况 [08月27日]</a></p>
</div>
   </div>
   <div class="AccordionPanel">
     <div class="AccordionPanelTab">企业资讯</div>
     <div class="AccordionPanelContent">
     <p align="center"><a href="http://##技术有限公司">##技术有限公司</a></p>
 <p align="left">我们依据研发项目的岗位需求，将面向高等院校，基于前期的职业规划引导，激发大学生精英就业和创新创业的志趣，物色精英和创业人才。我们物色人才的标准只有四个：志向、潜力、人格和基础技能。详细项目岗位人才需求，参见招聘信息发布。</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201208/t20120809_53382.html">安利阳光小记者团参观天津航空公司培训基地</a></p>
<p align="left">作为"六一"儿童节的特别礼物,"安利阳光小记者团"在6月3日下午参观了天津航空公司培训基地,开始了他们小记者训练营活动的第一站。...</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201207/t20120724_41656.html">纽崔莱"蛋白质·优享吧"引领健康早生活</a></p>
<p align="left">忙碌的城市生活，带来快节奏的生活方式，不吃早餐或匆忙应付，在生活中大有人在。 长期不吃早餐，对身体健康会造成很大的危害。随着...</p>
<p align="center"><a href="http://www.tianjinwe.com/business/qyzx/201207/t20120704_27247.html">全新雅姿男仕TM 系列尊耀上市 度身定制男士肌肤护理方案</a></p>
<p align="left">近日，安利旗下世界高档美容化妆品品牌雅姿，汇聚世界顶尖皮肤专家研究成果，倾力推出雅姿男仕TM护肤系列，为亚洲男性度身定制皮肤护理方...</p>
     </div>
   </div>
 </div>
  </div>
      </div>
  </div>
  <script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script></tr>

</table> 
<table width="870"  border="0" align="center" cellpadding="0" cellspacing="0">
<tr width="870" align="center">
<td width="870" align="center">&nbsp;</td>
</tr>
<tr width="870" align="center">
<td width="870" align="center">&nbsp;</td>
</tr>
<tr>
<td width="870" align="center"><font color="#000000"><a href="index.php"><font color="#000000">网站主页</font></a>|<a href="morebccd.php"><font color="#000000">岗位浏览</font></a>|<a href="morebccd.php"><font color="#000000">岗位申请</font></a>|<a href="bbs_index.php"><font color="#000000">论坛</font></a>|<a href="jszc.php?jszc=客户反馈"><font color="#000000">客户反馈</font></a>|<a href="jszc.php"><font color="#000000">帮助中心</font></a></font></td></tr>
<tr>
<tr>
<td width="870" align="center"><font color="#000000">Copyright &copy; 2012-2020 &nbsp;##技术有限公司版权所有</font></td></tr>
<tr>
<td width="870" align="center">&nbsp;</td></tr>
</table> 
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>

