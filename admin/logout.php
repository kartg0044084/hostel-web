<?php
session_start();
require_once('../connection/database.php');
//取得時間
$_POST['enddate'] = date("Y-m-d H:i:s");
// 傳送登入紀錄,寫入資料庫
$sql= "INSERT INTO user_login_record(account, name, publishedDate, enddate) VALUES ( :account, :name, :publishedDate, :enddate)";
$sth = $db ->prepare($sql);
$sth ->bindParam(":account", $_SESSION['account'], PDO::PARAM_STR);
$sth ->bindParam(":name", $_SESSION['name'], PDO::PARAM_STR);
$sth ->bindParam(":publishedDate", $_SESSION['publishedDate'], PDO::PARAM_STR);
$sth ->bindParam(":enddate", $_POST['enddate'], PDO::PARAM_STR);
$sth -> execute();
// 清除$_SESSION
unset($_SESSION['account']);
$msg='您以成功登出';
header('Location: login.php?msg='.$msg);
?>
