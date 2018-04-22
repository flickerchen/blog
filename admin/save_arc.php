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
//添加操作
if($act=='add')
{
 $sql="insert into arc(category,title,des,content,pic,arc_rq) values('$category','$title','$des','$content','$pic','$time')";
mysql_query($sql);
 echo "<script>alert('添加成功！'); window.location.href='glrz.php';</script>";
}
//修改操作
if($act=='edit')
{
   $id=$_POST["id"];
   $sql="update arc set title='$title',des='$des',content='$content',pic='$pic',category='$category' where arc_id='$id'";
mysql_query($sql);
   echo "<script>alert('修改成功！'); window.location.href='glrz.php';</script>";
}
//删除操作
if($act=="del")
{
$id=$_GET["id"];
$url=$_SERVER["HTTP_REFERER"];
$sql="delete from arc where arc_id='$id'";
mysql_query($sql);
echo "<script>alert('已经删除成功！'); window.location.href='".$url."';</script>";
}

?>