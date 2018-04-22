<?
include("../conn.php");
?>
<HTML><HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<LINK href="css/admin.css" type="text/css" rel="stylesheet">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width="100%" align=center border=0>
  <TR height=28>
    <TD background=images/title_bg1.jpg>当前位置: </TD></TR>
  <TR>
    <TD bgColor=#b1ceef height=1></TD></TR>
  <TR height=20>
    <TD background=images/shadow_bg.jpg></TD></TR></TABLE>
<p>&nbsp;</p>
<p>&nbsp;</p>
<TABLE cellSpacing=0 cellPadding=0 width="746" align=center border=0>
  <TR height=20>
    <TD></TD></TR>
  <TR height=22>
    <TD style="PADDING-LEFT: 20px; FONT-WEIGHT: bold; COLOR: #ffffff" 
    align=middle background=images/title_bg2.jpg>添加信息</TD>
  </TR>
  <TR bgColor=#ecf4fc height=12>
    <TD></TD></TR>
  <TR height=20>
<TD height="2"></TD>
</TR></TABLE>
<TABLE width="746" border=1 align=center cellPadding=0 cellSpacing=0 bordercolor="#EEEEEE">
<form action="save_arc.php?act=add" method="post" name="form10">
  <TR>
    <TD height="29" align=right>分类：</TD>
    <TD style="COLOR: #880000"><select name="category" id="category">
      <?
		  $query=mysql_query("select * from category");
		  while($rs=mysql_fetch_array($query))
		  {
		   
		  ?>
      <option value="<?=$rs['c_id']?>">
        <?=$rs['category']?>
        </option>
      <?
		    }
		  mysql_free_result($query);
		  ?>
    </select></TD>
  </TR>
  <TR>
    <TD height="27" align=right>标题：</TD>
    <TD style="COLOR: #880000"><input name="title" type="text" id="title" size="50"></TD>
  </TR>
  <TR>
    <TD height="129" align=right>简介：</TD>
    <TD style="COLOR: #880000"><textarea name="des" cols="80" rows="8" id="des"></textarea></TD>
  </TR>
  <TR>
    <TD height="27" align=right>内容：</TD>
    <TD style="COLOR: #880000"><div align="left">
				   <script type="text/javascript" charset="gb2312" src="kindeditor/kindeditor.js"></script>
				   <script charset="gb2312" src="kindeditor/plugins/code/prettify.js"></script>
	<script>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content"]', {
				cssPath : 'kindeditor/plugins/code/prettify.css',
				uploadJson : 'kindeditor/php/upload_json.php',
				fileManagerJson : 'kindeditor/php/file_manager_json.php',
				allowFileManager : true,
				afterBlur : function() {
this.sync();
K.ctrl(document, 13, function() {
K('form[name=form10]')[0].submit();
});
K.ctrl(this.edit.doc, 13, function() {
K('form[name=form10]')[0].submit();
});
}
			});
			prettyPrint();
		});
	</script>
     <textarea name="content" display="none" style="width:650px;height:400px;"></textarea>
                      
                    </div></TD>
  </TR>
  <TR>
    <TD width=89 height="27" align=right>上传地址：</TD>
    <TD width="503" style="COLOR: #880000"><INPUT name="pic" type="text" id="pic" maxlength=35></TD>
  </TR>
  <TR>
    <TD height="31" align=right>&nbsp;</TD>
    <TD style="COLOR: #880000"><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></TD>
  </TR>
  <TR>
    <TD height="31" align=right>&nbsp;</TD>
    <TD style="COLOR: #880000"><input type="submit" name="Submit" value="提  交">
     　 
     <input type="reset" name="Submit2" value="清  空"></TD>
  </TR>
  </form>
</TABLE>
</BODY></HTML>