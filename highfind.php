<?php
 include("top.php");
?>
<table width="870" height="150" border="3" align="center" cellpadding="0" cellspacing="0">
  <tr>
  
    <td width="870" height="150" align="center" valign="top" bgcolor="#FFFFFF"><table width="870" height="13" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="870" height="13">&nbsp;</td>
      </tr>
    </table>
      <table width="863" border="0" align="center" cellpadding="0" cellspacing="0">
        <script language="javascript">
	    function chkinput1(form)
		{
		  if(form.name.value=="")
		   {
		     alert("������ؼ���!");
			 form.name.select();
			 return(false);
		   }
		  if(form.jg.value=="")
		   {
		     alert("�������λʣ������!");
			 form.jg.select();
			 return(false);
		   }
		   return(true);
		}
	  </script>
        <form name="form1" method="post" action="findsp.php" onSubmit="return chkinput1(this)">
          <tr>
            <td width="863" height="25" bgcolor="#FFEDBF"><div align="center" style="color: #6A0206">��λ�߼�����</div></td>
          </tr>
          <tr>
            <td height="50" bgcolor="#FFEDBF"><table width="400" height="80" border="0" cellpadding="0" cellspacing="1" align="center">
                <tr>
                  <td width="68" height="25" bgcolor="#FFFFCC"><div align="center">�ؼ���:</div></td>
                  <td width="207" bgcolor="#ffffcc"><div align="left">
                      <input name="name" type="text" class="inputcss" id="name" size="25">
                  </div></td>
                  <td width="51" bgcolor="#FFFFcc"><div align="center">ģ��:</div></td>
                  <td width="69" bgcolor="#ffffcc"><div align="center">
                      <input name="mh" type="checkbox" value="1" checked>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#ffffcc"><div align="center">ʣ������:</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="dx">
                        <option selected value="1">����</option>
                        <option value="-1">С��</option>
                        <option value="0">����</option>
                      </select>
&nbsp;
                <select name="jg" class="inputcss">
                  <option selected value=10>10</option>
                  <option value=20>20</option>
                  <option value=30>30</option>
                  <option value=40>40</option>
                  <option value=50>50</option>
                </select>
                  </div></td>
                </tr>
                <tr>
                  <td height="25" bgcolor="#ffffcc"><div align="center">��λ���:</div></td>
                  <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                      <select name="lb">
                        <?php
				 $sql=mysql_query("select * from tb_type order by id desc",$conn);
				 $info=mysql_fetch_array($sql);
				 if($info==false)
				   {
				     echo " <option>��վ���޸�λ���</option>";
				   }
				  else
				  { 
				    do
					 {
				?>
                        <option value=<?php echo $info[id];?>><?php echo $info[typename];?></option>
                        <?php
				     }while($info=mysql_fetch_array($sql));
				 }
				?>
                      </select>
                  </div></td>
                </tr>
            </table></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">
                <input name="submit2" type="submit" class="buttoncss" value="��ʼ����">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>