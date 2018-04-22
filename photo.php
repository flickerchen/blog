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
<td width="575" height="956" align="left" valign="top">
		
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
         
          <tr>
            <td height="29" align="left" valign="top"><table width="100%" height="242" border="0" cellpadding="0" cellspacing="0">
              <!----开始循环--->
              <?php
	 $execc="select count(*) from arc where category=3 order by arc_id desc";
$resultc=mysql_query($execc);
$rsc=mysql_fetch_array($resultc);
$num=$rsc[0];
$pagesize=9;
$pagecount=ceil($num/$pagesize)-1;

if(empty($_GET["page"]))
{
$page=0;
}
else
{
$page=$_GET["page"];
}
if($page<0)
{
$page=0;
}
if($page>=$pagecount)
{
$page=$pagecount;
}
$nextpage=$page+1;
$prepage=$page-1;
$exec="select * from arc where category=3 order by arc_id desc limit ".($page*$pagesize).",$pagesize"; 
$result=mysql_query($exec);
if ($num==0)
{
echo "<tr><td align='center' class='word07'>该栏目暂时没有内容，抱歉</td></tr>";
}
else
{
while($row=mysql_fetch_array($result))
{
$m=$m+1;
$arry[$m]=$row["title"];//将结果集的数据倒入数组进行操作
$arryimg[$m]=$row["pic"];
$arryid[$m]=$row["arc_id"];
}
$arry_count=count($arry);//得到数组上标
}
?>
              <? for($i=1;$i<=(ceil($arry_count/3));$i++)
					{
					?>
              <tr>
                <?
		  for($j=1;$j<=3;$j++)
			{
			  $t++;
		?>
                <td height="121" align="center"><table width="90%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td height="110" align="center"><a href="<?=$arryimg[$t]?>" rel="lightbox"><img src="<?=$arryimg[$t]?>" width="147" height="104" border="0"></a></td>
                    </tr>
                    <tr>
                      <td height="27" align="center"><a href="show_arc.php?id=<?=$arryid[$t]?>" class="text12">
                        <?=$arry[$t]?>
                      </a> </td>
                    </tr>
                </table></td>
                <?
				if($t==sizeof($arry)) break;
				}
			?>
              </tr>
              <?
							if($t==sizeof($arry)) break;
												  
								}
								unset($t);
								unset($i);
								unset($j);
								unset($arry);
								unset($arryimg);
								unset($arryprice);
								unset($arrymprice);
								unset($arryid);
								unset($m);
								?>
              <!---循环结束--->
            </table></td>
          </tr>
          <tr>
            <td height="84"><div align="center" class="text12"> 共有
                  <?=$num?>
              条记录　分
              <?=ceil($num/$pagesize)?>
              页显示　当前是第
              <?=$page+1?>
              页 <a href="?page=0" class="text1">首页</a>
                  <?
if ($page==0) echo "<span class='text12'>上一页</span>";
else echo "<a href='?page=$prepage' class='text12'>上一页</a>";
?>
                  <?
if($page==$pagecount) echo "<span class='text12'>下一页</span>";
else echo "<a href='?page=$nextpage' class='text12'>下一页</a>"; 
?>
                  <?
if($page==$pagecount) echo "<span class='text12'>尾页</span>";
else echo "<a href='?page=$pagecount' class='text12'>尾页</a>";
?>
            </div></td>
          </tr>
        </table>
		</td>
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