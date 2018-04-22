<?php
session_start();
include("conn.php");
$userid=$_POST["username"];
$password=$_POST["userpwd"];
$sql=mysql_query("select * from hy where userid='$userid' and password='$password'");
$num=mysql_num_rows($sql);
if($num==0)
{
echo "<script>alert('密码不正确！');window.location.href='index.php'</script>";
exit;
}
else
{
$rs=mysql_fetch_assoc($sql);
$_SESSION["userid"]=$rs["userid"];
$_SESSION["hy_id"]=$rs["hy_id"];
mysql_free_result($sql);
//判断是否从订单结算页面发出请求
if(!isset($_POST["state"]))
{
echo "<script>alert('您已经成功登陆！');window.location.href='index.php'</script>";
}
else
{
echo "<script>alert('您已经成功登陆！');window.location.href='orderlogin.php'</script>";
}

}
mysql_free_result($sql);
include("inc/close.php");
?>
