<?
ini_set("error_reporting","E_ALL & ~E_NOTICE"); 
$conn=mysql_connect ("localhost", "root", "root");//127.0.0.1��MySql IP,root���ʺ�,�������������д��""��
mysql_select_db("boke"); //guestbook�����ݿ���
mysql_query("set names gb2312");
function txtClean($valueString){
            $txt=array("\n","\r");
            $html=array(" "," ");
            return str_replace($txt,$html,$valueString);
        }
?> 