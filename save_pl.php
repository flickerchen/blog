<?
include("conn.php");
$nick=$_POST["nick"];
$content=$_POST["content"];
$id=$_POST["id"];

 $sql="insert into pl(nick,content,arc_id) values('$nick','$content','$id')";
 $query=mysql_query($sql);
 $url=$_SERVER["HTTP_REFERER"];
 echo "<script>alert('���۷���ɹ���'); window.location.href='".$url."';</script>";


?>