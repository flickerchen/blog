<?
include("conn.php");
$username=$_POST["username"];
$password=$_POST["userpwd"];
$name=$_POST["name"];
$sex=$_POST["sex"];
$tel=$_POST["tel"];
$email=$_POST["email"];
$act=$_GET["act"];

//��Ӳ���
if($act=="add")
{$q=mysql_query("select * from hy where userid='$username'");
    $num=mysql_num_rows($q);
    mysql_free_result($q);
	if($num==0)
     {
$sql="insert into hy(userid,password,name,sex,tel,email) values('$username','$password','$name','$sex','$tel','$email')";
$query=mysql_query($sql);

echo "<script>alert('ע��ɹ������½��'); window.location.href='login.php';</script>";
 }
   else
   {
       echo "<script>alert('���û����Ѿ�����,���������룡'); window.location.href='reg.php';</script>";
   }
}

//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update hy set userid='$username',password='$password',tel='$tel',email='$email',sex='$sex'where hy_id='$id'";
  $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='edit_zl.php';</script>";
}
?>
