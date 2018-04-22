<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="gb2312">
    <title>login</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <!--Basic Styles-->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link href="style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="style/beyond.css" rel="stylesheet">
    <link href="style/demo.css" rel="stylesheet">
    <link href="style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="findadmin.php" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input value="admin" class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div class="loginbox-submit">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>
            </div>
                
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="style/jquery.js"></script>
    <script src="style/bootstrap.js"></script>
    <script src="style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="style/beyond.js"></script>




</body><!--Body Ends--></html>