<?php
require_once('../connection/database.php');
$sth=$db->query("SELECT*FROM page");
$pages=$sth->fetchAll(PDO::FETCH_ASSOC);

$sth2=$db->query("SELECT * FROM page WHERE pageID=".$_GET['pageID']."");
$page=$sth2->fetch(PDO::FETCH_ASSOC);
 ?>﻿
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>最新消息-享樂民宿</title>
<?php require_once("template/files.php"); ?>
</head>
<body style="background-image: url(../img/5566.png);background-attachment: fixed;">
 <?php require_once("template/header.php"); ?>
<div id="main">
  <div class="about">ABOUT</div>
  <div class="option">
      <?php foreach($pages as $row){ ?>
    <ul>
      <li><a href="about.php?pageID=<?php echo $row['pageID']; ?>"><?php echo $row['title']; ?></a></li>
    </ul>
    <?php } ?>
  </div>
    <div style="clear:both;"></div>
    <div class="content"><?php echo $page['content']; ?></div>
</div>

<div style="clear:both;"></div>
<?php require_once("template/footer.php"); ?>
</body>

</html>
