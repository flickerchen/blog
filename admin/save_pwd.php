<?
session_start();

include("../conn.php");
$web_admin=$_POST["web_admin"];
$pwd=$_POST["pwd"];

//�༭����
if($act=="edit")
{
$web_admin=$_SESSION['adminname'];
$sql="update web_admin set password='$pwd' where web_admin='$web_admin'";
mysql_query($sql);
echo "<script>alert('�޸ĳɹ���'); window.location.href='login.php';</script>";
}


?>