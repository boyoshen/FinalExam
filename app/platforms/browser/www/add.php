<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$rank = $_POST['rank'];


//紅色字體為判斷密碼是否填寫正確
if($_SESSION['username'] != null && $rnak != null )
{
        
     
        //更新資料庫資料語法
        $sql = "update song_table set rank='$rank'+";
        if(mysql_query($sql))
        {
                echo '修改成功!';
                 echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '修改失敗!';
                 echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>