<?php
require_once('../../connection/database.php');
$sth=$db->query('SELECT*FROM attractions');
$attractions=$sth->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>享樂後台系統</title>
<?php include_once('../template/header.php'); ?>
</head>

<body>
<div id="container">
 <div id="row">

 	<div class="top">
 		<p class="pr-4"><b>Email:</b>	kartg0044084@gmail.com    <b>Support:</b> +90-897-678-44</p>
 	</div>

 	<div class="theme">
 		<div>
 			<p class="pt-5"><b>Welcome to ENJOY HAPPY</b><a href="#" class="icon-profile-male  ml-4"></a></p>
 		</div>
 	</div>

	<?php include_once('../template/nav.php'); ?>

<div id="content">
<div class="title">
    <h1>套裝行程管理</h1>
</div>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active">套裝行程管理</li>
    </ol>

    <a href="add.php" class="btn btn-outline-secondary">新增一筆</a>

  <table>
    <thead>
      <tr>
        <th>行程編號</th>
        <th>行程名稱</th>
        <th>行程圖片</th>
        <th>行程價錢</th>
        <th>行程說明</th>
        <th>刪除</th>
      </tr>
    </thead>

      <tbody>
        <?php foreach($attractions as $row){ ?>
      <tr>
        <td><?php echo $row['attractionsID']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><a class="fancybox" rel="group" href="../../uploads/attractions/<?php echo $row['picture']; ?>" target="_blank"><img src="../../uploads/attractions/<?php echo $row['picture']; ?>" class="img-thumbnail"/><a></td>
        <td>$NT: <?php echo $row['price']; ?></td>
        <td><?php echo $row['description']; ?></td>
        <td><a href="delete.php?attractionsID=<?php echo $row['attractionsID']; ?>" class="btn btn-info" onclick="if(!confirm('是否刪除此筆資料？')){return false;};" class="btn btn-default">Delete</a></td>
      </tr>
      <?php } ?>
    </tbody>
    </table>
         <page aria-label="Page navigation example"><!--空區塊 -->
      <ul class="pagination">

      </ul>
    </page>

</div>
<?php include_once('../template/footer.php'); ?>



 </div>
</div>

</body>
</html>
