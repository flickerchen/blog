<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
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
			<!--顶部设计-->
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
        <li><a href="../index.php">网站首页</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">后台管理 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">admin</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#mymodal" data-toggle='modal'>修改密码</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="login.php">退出系统</a></li>
           </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--密码修改框-->
<div class="modal fade" id='mymodal' tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">管理员密码修改:</h4>
      </div>
      <div class="modal-body">

      	
        <form action="save_pwd.php?act=edit" method="post">
        	<div class="form-group">
        		<labed for='web_admin'>账号</labed><input type="text" class="form-control " name="web_admin" id="web_admin" value="<?=$rs['web_admin']?>" />
        	</div>
        	<div class="form-group">
        		<labed for='pwd'>密码</labed><input type="password" class="form-control" name="pwd" id="pwd" value=""  placeholder="请输入密码"/>
        	</div>
        	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary">修改</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

		<div class="row">
			<!--左侧设计-->
			<div class="col-md-2">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingOne"><!--此处修改id-->
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          		基本信息管理
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
    <div class="list-group">
      	<a href="grxxgl" class='list-group-item'>个人信息管理</a>

      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingTwo"><!--此处修改id-->
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          		日志管理
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="list-group">
      	<a href="tjrz.php" class='list-group-item'>添加日志</a>
      	<a href="glrz.php" class='list-group-item'>管理日志</a>
      	
      </div>
    </div>
  </div>
  
  <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          	会员管理
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="list-group">
      	<a href="hygl.php" class='list-group-item'>会员管理</a>
 
      	
      </div>
     </div>
  </div>
  
   <div class="panel panel-primary">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapseThree">
          	文章统计
        </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree"><!--此处修改id-->
      <div class="list-group">
      	<a href="wztj.php" class='list-group-item'>文章统计</a>

      </div>
     </div>
  </div>
  
  
  
</div>
			</div>
			<!--右侧设计-->
			<div class="col-md-10">
				<div class="thumbnail">
      
      <div class="caption">
        <h3>欢迎进入enjoy yourself后台</h3>
        <p>...</p>
        <p><a href="../index.php" class="btn btn-primary" role="button" >网站首页</a> 
        	<a href="login.php" class="btn btn-default" role="button" >退出系统</a>
        </p>
      </div>
    </div>
			</div>
		</div>
		</div>
</BODY></HTML>
