<?php
require_once('../../connection/database.php');
$sth=$db->query('SELECT*FROM product_category');
$categories=$sth->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>訂房分類管理</h1>
</div>
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">首頁</a></li>
    <li class="breadcrumb-item active">訂房分類管理</li>
    </ol>

    <a href="add.php" class="btn btn-outline-secondary">新增一筆</a>

  <table>
    <thead>
      <tr>
        <th>分類編號</th>
        <th>房型名稱</th>
        <th>分類圖片</th>
        <th>Update</th>
        <th>刪除</th>
      </tr>
    </thead>

      <tbody>
        <?php foreach($categories as $row){ ?>
      <tr>
        <td><?php echo $row['product_categoryID']; ?></td>
        <td><a href="../product/list.php?product_categoryID=<?php echo $row['product_categoryID']; ?>"><?php echo $row['category']; ?></td>
        <td><img src="../../uploads/product_category/<?php echo $row['picture']; ?>" alt='' width='150' style="margin-top:20px;"></td>
        <td><a href="edit.php?product_categoryID=<?php echo $row['product_categoryID']; ?>" class="btn btn-info">Update</a></td>
        <td><a href="delete.php?product_categoryID=<?php echo $row['product_categoryID']; ?>" class="btn btn-info" onclick="if(!confirm('是否刪除此筆資料？')){return false;};" class="btn btn-default">Delete</a></td>
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
