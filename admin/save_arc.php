<?
include("../conn.php");
$title=$_POST["title"];
$content=$_POST["content"];
$des=$_POST["des"];
$pic=$_POST["pic"];
$category=$_POST["category"];
date_default_timezone_set("PRC");
$time=date("Y-m-d");
$act=$_GET["act"];
//��Ӳ���
if($act=='add')
{
 $sql="insert into arc(category,title,des,content,pic,arc_rq) values('$category','$title','$des','$content','$pic','$time')";
mysql_query($sql);
 echo "<script>alert('��ӳɹ���'); window.location.href='glrz.php';</script>";
}
//�޸Ĳ���
if($act=='edit')
{
   $id=$_POST["id"];
   $sql="update arc set title='$title',des='$des',content='$content',pic='$pic',category='$category' where arc_id='$id'";
mysql_query($sql);
   echo "<script>alert('�޸ĳɹ���'); window.location.href='glrz.php';</script>";
}
//ɾ������
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('�Ѿ�ɾ���ɹ���'); window.location.href='".$url."';</script>";
}

?>