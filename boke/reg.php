<?php
session_start();
include("conn.php");
//得到博客信息
$sql_about="select * from boke_info where boke_id=1";
$q_about=mysql_query($sql_about);
$rs_about=mysql_fetch_assoc($q_about);
$boke_title=$rs_about["title"];
$boke_content=$rs_about["content"];
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
        <td width="636" height="956" align="center" valign="top"><table width="93%" height="117" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="117">&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>
          <table width="95%" border="0" cellpadding="0" cellspacing="0" class="border">
		  <form action="save_hy.php?act=add" method="post">
            <tr>
              <td height="35" colspan="2" bgcolor="#D8B172"  style="color:#ffffff; font-weight:600;">&nbsp;&nbsp;会员注册</td>
              </tr>
            <tr>
              <td width="31%" height="35" align="right" valign="middle" class="text12">会员帐号：</td>
              <td width="69%" align="left" valign="middle"><input name="username" type="text" class="text12" id="username"></td>
            </tr>
            <tr>
              <td height="35" align="right" valign="middle" class="text12">会员密码：</td>
              <td align="left" valign="middle"><input name="userpwd" type="password" class="text12" id="userpwd" ></td>
            </tr>

            <tr>
              <td height="35" align="right" valign="middle" class="text12">姓名：</td>
              <td align="left" valign="middle"><input name="name" type="text" class="text12" id="name"></td>
            </tr>
            <tr>
              <td height="35" align="right" valign="middle" class="text12">性别：</td>
              <td align="left" valign="middle"><input type="radio" name="sex" value="男">
                男
                  <input type="radio" name="sex" value="女">
                  女</td>
            </tr>
            <tr>
              <td height="35" align="right" valign="middle" class="text12">电话：</td>
              <td align="left" valign="middle"><input name="tel" type="text" class="text12" id="tel"></td>
            </tr>
            <tr>
              <td height="35" align="right" valign="middle" class="text12">邮箱：</td>
              <td align="left" valign="middle"><input name="email" type="text" class="text12" id="email"></td>
            </tr>
            <tr>
              <td height="35">&nbsp;</td>
              <td><input type="submit" name="Submit" value="提交">
                <input type="submit" name="Submit2" value="重置"></td>
            </tr>
			</form>
          </table></td>
        <td width="18">&nbsp;</td>
        <td width="267" align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="162" align="left" valign="top" ><?php include("inc_about.php");?></td>
          </tr>
         
          <tr>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          
        </table></td>
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
