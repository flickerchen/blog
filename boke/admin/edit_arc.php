<?
include("../conn.php");
?>

<?php
$id=$_GET["id"];
$sql="select * from arc where arc_id='$id'";
$q=mysql_query($sql);
$rs=mysql_fetch_assoc($q);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="gb2312">
		<title>enjoy yourself</title>
		<link rel="stylesheet" type="text/css" href="bootsrap/css/bootstrap.min.css" />
		<script src="jquery.min.js" type="text/javascript" charset="gb2312"></script>
		<script src="bootsrap/js/bootstrap.min.js" type="text/javascript" charset="gb2312"></script>
		
		
	</head>
	<style type="text/css">
		.navbar-brand{
			color:#fff!important;
			font-weight:bold ;
		}
		body{
			padding: 70px;
		}
	</style>
	<body>
		<div class="container">
			<!--�������-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">enjoy yourself</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../index.php">��վ��ҳ</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">��̨���� <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">admin</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#mymodal" data-toggle='modal'>�޸�����</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.php">�˳�ϵͳ</a></li>
           </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--�����޸Ŀ�-->
<div class="modal fade" id='mymodal' tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">����Ա�����޸�:</h4>
      </div>
      <div class="modal-body">

      	
        <form action="save_pwd.php?act=edit" method="post">
        	<div class="form-group">
        		<labed for='web_admin'>�˺�</labed><input type="text" class="form-control " name="web_admin" id="web_admin" value="<?=$rs['web_admin']?>" />
        	</div>
        	<div class="form-group">
        		<labed for='pwd'>����</labed><input type="password" class="form-control" name="pwd" id="pwd" value=""  placeholder="����������"/>
        	</div>
        	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">�ر�</button>
        <button type="submit" class="btn btn-primary">�޸�</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

		<div class="row">
			<!--������-->
			<div class="col-md-2">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne"><!--�˴��޸�id-->
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          		������Ϣ����
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    <div class="list-group">
      	<a href="grxxgl" class='list-group-item'>������Ϣ����</a>

      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo"><!--�˴��޸�id-->
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          		��־����
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="list-group">
      	<a href="tjrz.php" class='list-group-item'>�����־</a>
      	<a href="glrz.php" class='list-group-item'>������־</a>
      	
      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          	��Ա����
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="list-group">
      	<a href="hygl.php" class='list-group-item'>��Ա����</a>
 
      	
      </div>
     </div>
  </div>
  
   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseThree">
          	����ͳ��
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"><!--�˴��޸�id-->
      <div class="list-group">
      	<a href="wztj.php" class='list-group-item'>����ͳ��</a>

      </div>
     </div>
  </div>
  
  
  
</div>
			</div>
<!--�Ҳ����-->
			<div class="col-md-10">
				<div class="thumbnail">
      
      <div class="caption">
<TABLE width="746" border=1 align=center cellPadding=0 cellSpacing=0 bordercolor="#EEEEEE">
<form action="save_arc.php?act=edit" method="post" name="form10">
<input type="hidden" name="id" value="<?=$id?>">
  <TR>
    <TD height="29" align=right>���ࣺ</TD>
    <TD style="COLOR: #880000"><select name="category" id="category">
         <?
		  $query=mysql_query("select * from category");
		  while($rst=mysql_fetch_array($query))
		  {
		   
		  ?>
      <option value="<?=$rst['c_id']?>" <?php if($rst["c_id"]==$rs["category"]) echo "selected"?>>
        <?=$rst['category']?>
        </option>
      <?
		    }
		  mysql_free_result($query);
		  ?>
    </select></TD>
  </TR>
  <TR>
    <TD height="27" align=right>���⣺</TD>
    <TD style="COLOR: #880000"><input name="title" type="text" id="title" size="50" value="<?=$rs["title"]?>"></TD>
  </TR>
  <TR>
    <TD height="129" align=right>��飺</TD>
    <TD style="COLOR: #880000"><textarea name="des" cols="80" rows="8" id="des"><?=$rs["des"]?></textarea></TD>
  </TR>
  <TR>
    <TD height="27" align=right>���ݣ�</TD>
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
     <textarea name="content" display="none" style="width:650px;height:400px;"><?=$rs["content"]?></textarea>
                      
                    </div></TD>
  </TR>
  <TR>
    <TD width=89 height="27" align=right>�ϴ���ַ��</TD>
    <TD width="503" style="COLOR: #880000"><INPUT name="pic" type="text" id="pic" maxlength=35 value="<?=$rs["pic"]?>"></TD>
  </TR>
  <TR>
    <TD height="31" align=right>&nbsp;</TD>
    <TD style="COLOR: #880000"><iframe border="0" frameBorder="0" frameSpacing="0" height="21" marginHeight="0" marginWidth="0" noResize scrolling="no" width="100%" vspale="0" src="up.php"></iframe></TD>
  </TR>
  <TR>
    <TD height="31" align=right>&nbsp;</TD>
    <TD style="COLOR: #880000"><input type="submit" name="Submit" value="��  ��">
     �� 
     <input type="reset" name="Submit2" value="��  ��"></TD>
  </TR>
  </form>
</TABLE>
</body></html>