<?php
 include("top.php");
?>
<table width="870" height="326" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
    <td width="865" height="326" align="center" valign="top" bgcolor="#FFFFFF">       <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert("����������������!");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert("�����������˵�ַ!");
				  form.dz.select();
				  return(false);
				}
				if(form.yb.value==""){
				  alert("�������������ʱ�!");
				  form.yb.select();
				  return(false);
				}
				if(form.tel.value==""){
				  alert("��������������ϵ�绰!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert("������������E-mail��ַ!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("������E-mail��ַ��ʽ�������!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
      <table width="557" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="6"></td>
        </tr>
      </table>
      <table width="853" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FCC223">
      <tr>
        <td width="840" height="25" bgcolor="#FEDD9A"><div align="center" style="color: #720206">��������Ϣ��д</div></td>
      </tr>
      <tr>
        <td height="295"><table width="840" height="293" border="0" align="center" cellpadding="0" cellspacing="1">

            <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
              <tr>
                <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">������������</div></td>
                <td width="175" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="name2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
                <td width="104" bgcolor="#FFFFFF"><div align="center">�Ա�</div></td>
                <td width="476" bgcolor="#FFFFFF"><div align="left">
                    <select name="sex">
                      <option selected value="��">��</option>
                      <option value="Ů">Ů</option>
			<option value="����">����</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">�������룺</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">��ϵ�绰��</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">�������䣺</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="email" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">��ϸ��ַ��</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input name="dz" type="text" class="inputcss" id="dz" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">��ͥ���ڳ��У�</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="shff" id="shff">
                      <option selected  value="��û��ѡ������ʡ�У�">��ѡ������ʡ��</option>
             		  <option value="������">--������--</option>
                      <option value="�Ϻ���">--�Ϻ���--</option>
                      <option value="������">--������--</option>
                      
                      <option value="����ʡ">--����ʡ--</option>
                      <!--<option value="��Ϫ">��Ϫ</option>
                      <option value="ͭ��">ͭ��</option>
                      <option value="����">����</option>
                      <option value="��ɽ">��ɽ</option>
                      <option value="����">����</option>
                      <option value="�Ż�ɽ">�Ż�ɽ</option>
                      <option value="��ɽ">��ɽ</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="���">���</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="����">����</option>
                      <option value="�Ϸ�">�Ϸ�</option>
                      <option value="�ߺ�">�ߺ�</option>
                      <option value="����">����</option>-->
                      
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="�㽭ʡ">--�㽭ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="�½�ʡ">--�½�ʡ--</option>
                      <option value="�����">--�����--</option>
                      <option value="̨��ʡ">--̨��ʡ--</option>
                      <option value="ɽ��ʡ">--ɽ��ʡ--</option>
                      <option value="�Ĵ�ʡ">--�Ĵ�ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="ɽ��ʡ">--ɽ��ʡ--</option>
                      <option value="���ɹ�">--���ɹ�--</option>

                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="�ӱ�ʡ">--�ӱ�ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="�㶫ʡ">--�㶫ʡ--</option>
                      <option value="����ʡ">--����ʡ--</option>
                      <option value="������ʡ">--������ʡ--</option>
                      <option value="����">--����--</option>
                      <option value="���">--���--</option>
                      <option value="����">--����--</option>
                      <option value="�ຣ">--�ຣ--</option>
                      <option value="����">--����--</option>
                      <option value="����">--����--</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">���ھͶ��Ĵ�ѧ��</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="zfff" id="zfff">
                      <option selected value="û��ѡ���ѧ">��ѡ�������Ͷ��Ĵ�ѧ</option>
                      <option value="���մ�ѧ">���մ�ѧ</option>
                      <option value="�Ͼ����պ����ѧ">�Ͼ����պ����ѧ</option>
                      <option value="���ϴ�ѧ">���ϴ�ѧ</option>
                      <option value="���ϴ�ѧ">���ϴ�ѧ</option>
                      <option value="�й���ҵ��ѧ">�й���ҵ��ѧ</option>
                      <option value="�Ͼ���ѧ">�Ͼ���ѧ</option>
                      <option value="�Ͼ�����ѧ">�Ͼ�����ѧ</option>
                      <option value="�Ͼ�ũҵ��ѧ">�Ͼ�ũҵ��ѧ</option>
                      <option value="�Ͼ�ʦ����ѧ">�Ͼ�ʦ����ѧ</option>
                      <option value="�Ӻ���ѧ">�Ӻ���ѧ</option>
                      <option value="�й�ҩ�ƴ�ѧ">�й�ҩ�ƴ�ѧ</option>
                      <option value="���ݴ�ѧ">���ݴ�ѧ</option>
                      <option value="�Ͼ�����ѧԺ">�Ͼ�����ѧԺ</option>
                      <option value="�Ͼ���ׯѧԺ">�Ͼ���ׯѧԺ</option>
                      <option value="���ݹ�ѧԺ">���ݹ�ѧԺ</option>
                      <option value="�Ͼ�����ѧԺ">�Ͼ�����ѧԺ</option>
                      <option value="���ռ���ʦ��ѧԺ">���ռ���ʦ��ѧԺ</option>
                      <option value="�Ͼ����ѧԺ">�Ͼ����ѧԺ</option>
                      <option value="������ѧԺ">������ѧԺ</option>
                      <option value="�γ�ʦ��ѧԺ">�γ�ʦ��ѧԺ</option>
                      <option value="�γǹ�ѧԺ">�γǹ�ѧԺ</option>
                      <option value="������ѧԺ">������ѧԺ</option>
                      <option value="���ݴ�ѧ��ԭ���չ�ҵѧԺ��">���ݴ�ѧ��ԭ���չ�ҵѧԺ��</option>
                      <option value="�Ͼ�ɭ�־���ѧԺ">�Ͼ�ɭ�־���ѧԺ</option>
                      <option value="�Ͼ�����ѧ̩�ݿƼ�ѧԺ">�Ͼ�����ѧ̩�ݿƼ�ѧԺ</option>
                      <option value="���ϴ�ѧ����ѧԺ">���ϴ�ѧ����ѧԺ</option>
                      <option value="��ǨѧԺ">��ǨѧԺ</option>
                      <option value="����ѧԺ">����ѧԺ</option>
                      <option value="������ְҵ��ѧ">������ְҵ��ѧ</option>
                      <option value="������ѧԺ">������ѧԺ</option>
                      <option value="�Ͼ��ƾ���ѧ��ɽѧԺ">�Ͼ��ƾ���ѧ��ɽѧԺ</option>
                      <option value="�Ͼ�����ѧԺ">�Ͼ�����ѧԺ</option>
                      <option value="����ҽѧԺ">����ҽѧԺ</option>
                      <option value="�Ͼ��ʵ��ѧ">�Ͼ��ʵ��ѧ</option>
                      <option value="���տƼ���ѧ">���տƼ���ѧ</option>
                      <option value="�Ͼ���ҽҩ��ѧ">�Ͼ���ҽҩ��ѧ</option>
                      <option value="���ݿƼ�ѧԺ">���ݿƼ�ѧԺ</option>
                      <option value="�Ͼ��ƾ���ѧ">�Ͼ��ƾ���ѧ</option>
                      <option value="�Ͼ���Ϣ���̴�ѧ">�Ͼ���Ϣ���̴�ѧ</option>
                      <option value="����ʦ����ѧ">����ʦ����ѧ</option>
                      <option value="�Ͼ�ҽ�ƴ�ѧ">�Ͼ�ҽ�ƴ�ѧ</option>
                      <option value="�Ͼ���ҵ��ѧ">�Ͼ���ҵ��ѧ</option>
                      <option value="�Ͼ���ҵ��ѧ">�Ͼ���ҵ��ѧ</option>
                      <option value="���ݴ�ѧ">���ݴ�ѧ</option>
                      <option value="�Ͼ�����ѧԺ">�Ͼ�����ѧԺ</option>
                      <option value="��ͨ��ѧ">��ͨ��ѧ</option>
                      <option value="����Ƽ�ѧԺ">����Ƽ�ѧԺ</option>
                      <option value="���ݹ���ѧԺ">���ݹ���ѧԺ</option>
                      <option value="����ʦ��ѧԺ">����ʦ��ѧԺ</option>
                      <option value="���վ���ѧԺ">���վ���ѧԺ</option>
                      <option value="�й���ҵ��ѧ�캣ѧԺ">�й���ҵ��ѧ�캣ѧԺ</option>
                      <option value="����ѧУ">����ѧУ</option>
                     </select>
                </div></td>
              </tr>
              <tr>
                <td height="86" bgcolor="#FFFFFF"><div align="center">�����ԣ�</div></td>
                <td height="86" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <textarea name="ly" cols="70" rows="5" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                </div></td>
              </tr>
              <tr>
                <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">
                    <input name="submit2" type="submit" class="buttoncss" value="�ύ���뵥">
                </div></td>
              </tr>
            </form>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
 if($_GET[dingdanhao]!="")
  {  $dd=$_GET[dingdanhao];
     session_start();
     $array=explode("@",$_SESSION[producelist]);
	 $sum=count($array)*20+260;
    echo" <script language='javascript'>";
	echo" window.open('showdd.php?dd='+'".$dd."','newframe','top=150,left=200,width=600,height=".$sum.",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
	echo "</script>";

  }
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
