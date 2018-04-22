<?
include("../conn.php");
$title=$_POST["title"];
$content=$_POST["content"];
$fwl=$_POST["fwl"];
$dj=$_POST["dj"];
$pic=$_POST["pic"];
$act=$_GET["act"];

//修改操作
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update boke_info set title='$title',tx='$pic',content='$content' where boke_id=1";
 $query=mysql_query($sql);
 echo "<script>alert('修改成功！'); window.location.href='grxxgl.php';</script>";
}


?>