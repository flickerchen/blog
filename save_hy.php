<?
include("conn.php");
$username=$_POST["username"];
$password=$_POST["userpwd"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$act=$_GET["act"];

//添加操作
if($act=="add")
{$q=mysql_query("select * from hy where userid='$username'");
    $num=mysql_num_rows($q);
    mysql_free_result($q);
	if($num==0)
     {
$sql="insert into hy(userid,password,name,sex,tel,email) values('$username','$password','$name','$sex','$tel','$email')";
$query=mysql_query($sql);

echo "<script>alert('注册成功，请登陆！'); window.location.href='login.php';</script>";
 }
   else
   {
       echo "<script>alert('该用户名已经存在,请重新输入！'); window.location.href='reg.php';</script>";
   }
}

//修改操作
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update hy set userid='$username',password='$password',tel='$tel',email='$email',sex='$sex'where hy_id='$id'";
  $query=mysql_query($sql);
 echo "<script>alert('修改成功！'); window.location.href='edit_zl.php';</script>";
}
?>
