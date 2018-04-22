<?php
session_start();
include("conn.php");
$id=$_GET["id"];
mysql_query("update arc set hits=hits+1 where arc_id='$id'");
$cx=mysql_query("select * from arc where arc_id='$id'");
$rs=mysql_fetch_assoc($cx);
$hits=$rs["hits"];
mysql_free_result($cx);

//得到博客信息
//得到博客信息
$sql_about="select * from boke_info where boke_id=1";
$q_about=mysql_query($sql_about);
$rs_about=mysql_fetch_assoc($q_about);
$boke_title=str_replace('kk','昇',$rs_about["title"]);
$boke_content=str_replace('kk','昇',$rs_about["content"]);
$boke_dj=$rs_about["dj"];
$boke_fwl=$rs_about["fwl"];
$boke_tx=$rs_about["tx"];
mysql_free_result($q_about);
//
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $boke_title;?></title>
<link href="css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE1 {font-family: "新宋体"}
body {
	background-color: #CACACA;
	background-image: url(images/bj.jpg);
}

-->
</style></head>

<body>
<?php
$id=$_GET["id"];
$sql="select * from arc where arc_id='$id'";
$query=mysql_query($sql);
$rs=mysql_fetch_assoc($query);
?>

<table width="950" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="6" align="left" valign="bottom" class="bighei"></td>
  </tr>
</table>
<?php
include("top.php");
?>
<table width="950" height="6" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="6"></td>
  </tr>
</table>
<table width="950" height="118" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15" height="15"><img src="images/lanmu_bk_01.gif" width="15" height="15" /></td>
    <td width="921" background="images/lanmu_bk_02.gif"></td>
    <td width="14"><img src="images/lanmu_bk_03.gif" width="14" height="15" /></td>
  </tr>
  <tr>
    <td height="500" background="images/lanmu_bk_04.gif"></td>
    <td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="956" align="left" valign="top" class="linetext"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="37" align="center"><?=str_replace('kk','昇',$rs["title"])?></td>
          </tr>
          <tr>
            <td height="37" class="text12"><div  class="text12" style='line-height:23px;'><?=str_replace('kk','昇',$rs["content"]);?></div></td>
            </tr>
        </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="29" bgcolor="#D9B577"> 　<span class="lanse">评论</span></td>
              </tr>
          </table>
		  <?php
		  $sql="select * from pl where arc_id='$id'";
		  $q=mysql_query($sql);
		  while($r=mysql_fetch_array($q))
		  {
		  ?>
          <table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
            <tr>
              <td height="35" class="hui14"><?=$r["content"]?></td>
            </tr>
            <tr>
              <td height="25"><span class="text12">发布者：</span><span class="red"><?=$r["nick"]?></span></td>
              </tr>
          </table>
		  <?php
		  }
		  ?>
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="25" bgcolor="#D9B577" class="shui"> &nbsp;&nbsp;发表评论</td>
              </tr>
          </table>
		  <?
if(empty($_SESSION["userid"]))
{
 ?>
		
		  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		 
		  <form action="save_pl.php" method="post">
		  <input type="hidden" name="id" value="<?=$id?>">
            <tr>
              <td width="9%" height="30">&nbsp;</td>
              <td width="91%" class="hui14">您还没有<span class="red"><a href="login.php" class="lvext14">登陆</a></span>，不能发表评论！请<span class="lvext14"><a href="login.php" class="lvext14">登陆</a></span>！</td>
              </tr>
			</form>
          </table>
	 <?
}
else
{
?>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
		 
		  <form action="save_pl.php" method="post">
		  <input type="hidden" name="id" value="<?=$id?>">
            <tr>
              <td height="36" align="right" class="text12">昵称：</td>
              <td><input name="nick" type="text" id="nick" value=<?= $_SESSION["userid"]?>></td>
            </tr>
            <tr>
              <td height="120" align="right" class="text12">评论内容：</td>
              <td><textarea name="content" cols="60" rows="8" id="content"></textarea></td>
            </tr>
            <tr>
              <td width="9%" height="30">&nbsp;</td>
              <td width="91%"><input type="submit" name="Submit" value="提交评论"></td>
              </tr>
			</form>
          </table>
  <?
}
?>

	  
		  </td>
        </tr>
    </table></td>
    <td background="images/lanmu_bk_06.gif"></td>
  </tr>
  <tr>
    <td height="15"><img src="images/lanmu_bk_07.gif" width="15" height="15" /></td>
    <td height="15" background="images/lanmu_bk_08.gif"></td>
    <td><img src="images/lanmu_bk_09.gif" width="14" height="15" /></td>
  </tr>
</table>
<?php
include("copy.php");
?>
</body>
</html>
