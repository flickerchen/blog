<table width="950" height="118" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="15" height="15"><img src="images/lanmu_bk_01.gif" width="15" height="15" /></td>
    <td width="921" background="images/lanmu_bk_02.gif"></td>
    <td width="14"><img src="images/lanmu_bk_03.gif" width="14" height="15" /></td>
  </tr>
  <tr>
    <td height="95" background="images/lanmu_bk_04.gif"></td>
    <td bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="67%" height="57"><table width="97%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" align="left" valign="bottom" class="biglan"><?=$boke_title?></td>
          </tr>
          <tr>
            <td height="30" align="left" valign="middle" class="hui14"><?=$boke_title?></td>
          </tr>
          <tr>
            <td height="20">&nbsp;</td>
          </tr>
          <tr>
            <td height="25"><table width="50%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="30%" align="center" valign="middle"><a href="index.php"  class="xhui14">首页</a></td>
                  <td width="17%" align="center" valign="middle" ><a href="arclist.php" class="xhui14">日志</a></td>
                  <td width="15%" align="center" valign="middle"><a href="photo.php" class="xhui14">相册</a></td>
                  <td width="30%" align="center"><a href="about.php" class="xhui14">关于我们</a></td>
                  <td width="8%">&nbsp;</td>
                </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="33%" align="center" valign="top">
		<?
if(empty($_SESSION["userid"]))
{
?>
		<table width="73%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60%" height="34" align="center" valign="middle"><a href="login.php" class="hui14">登陆</a></td>
            <td width="40%" align="center" valign="middle"><a href="reg.php" class="hui14">注册</a></td>
          </tr>
        </table>
		<table width="84%" border="0">
		<form action="search.php">
          <tr>
            <td width="30%" height="29" align="center" class="text12">关键词:</td>
            <td width="40%" align="center"><input name="key" type="text" id="key" size="10" /></td>
            <td width="30%" align="center"><input type="submit" name="Submit" value="搜  索" /></td>
          </tr>
		  </form>
        </table></td>
      </tr>
    </table>
	  <?
}
else
{
?>
<table width="73%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="60%" height="34" align="center" valign="middle"><a href="login.php" class="hui14">欢迎您,<span class="red">
              <?=$_SESSION["userid"]?></span></a></td>
           
          </tr>
		   <tr>
       
            <td width="40%" align="center" valign="middle"><a href="edit_zl.php?id=<?=$_SESSION["hy_id"]?>"class="hui14">会员修改资料</a> <a href="exit.php?"class="hui14">退出登录</a></td>
          </tr>
      </table></td>
  </tr>
    </table>
 <?
}
?>
	</td>
    <td background="images/lanmu_bk_06.gif"></td>
  </tr>
  <tr>
    <td height="15"><img src="images/lanmu_bk_07.gif" width="15" height="15" /></td>
    <td height="15" background="images/lanmu_bk_08.gif"></td>
    <td><img src="images/lanmu_bk_09.gif" width="14" height="15" /></td>
  </tr>
</table>
