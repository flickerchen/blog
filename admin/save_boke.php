<?
include("../conn.php");
$title=$_POST["title"];
$content=$_POST["content"];
$fwl=$_POST["fwl"];
$dj=$_POST["dj"];
$pic=$_POST["pic"];
$act=$_GET["act"];

//�޸Ĳ���
if($act=='edit')
{
$id=$_POST["id"];
 $sql="update boke_info set title='$title',tx='$pic',content='$content' where boke_id=1";
 $query=mysql_query($sql);
 echo "<script>alert('�޸ĳɹ���'); window.location.href='grxxgl.php';</script>";
}


?>