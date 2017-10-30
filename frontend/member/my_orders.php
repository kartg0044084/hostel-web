<?php
session_start();
require_once('../../connection/database.php');
$sth=$db->query("SELECT * FROM customer_order WHERE memberID='".$_SESSION['memberID']."' ORDER BY createdDate DESC");
//查詢member會員訂單買了那些東西
$memberID=$sth->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!doctype html>
<!-- Website ../template by freewebsite../templates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cake House-我的訂單</title>
	<?php require_once("../template/files2.php"); ?>
</head>
<body>
	<div id="page">
		<?php require_once("../template/header2.php"); ?>
		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>會員專區</h1>
				</div>
			</div>
			<div class="body">

			</div>
			<div class="footer">
				<ul class="Category">
					<li><a href="member_edit.php">會員資料修改</a></li>
					<li><a href="my_cart.php">我的購物車</a></li>
					<li><a href="my_orders.php">我的訂單</a></li>
				</ul>
				<div id="OrderForm">
					<h1>我的訂單</h1>
					<table id="order-tables">
                      	<thead>
                      		<tr>
                      			<th width="15%">訂購日期</th>
                      			<th width="40%">訂單編號</th>
                            <th width="10%">總金額</th>
                            <th width="10%">運費</th>
                      			<th width="15%">訂單狀態</th>
                            <th width="10%" style="border-right:1px solid #ebebeb;"></th>
                      		</tr>
                      	</thead>
                        <tbody>
													<?php foreach($memberID as $row){ ?>
                          <tr data-toggle="collapse" data-target="#demo1" class="accordion-toggle">
                            <td data-title="訂購日期"><?php echo $row['orderDate']; ?></td>
                            <td data-title="訂單編號"><?php echo $row['orderNO']; ?></td>
                            <td data-title="總金額">$NT<?php echo $row['totalprice']; ?></td>
                            <td data-title="運費">$NT <?php echo $row['shipping']; ?></td>
                            <td data-title="訂單狀態">
                              <?php switch ($row['status']) {
																case 0:
																	echo "新訂單";
																	break;
																case 1:
																	echo "已付款";
																	break;
																case 2:
																	echo "出貨中";
																	break;
																case 3:
																	echo "已出貨";
																	break;
																case 4:
																	echo "已送達(交易完成)";
																	break;
                                case 99:
  																echo "取消訂單";
  																break;
															} ?>
                            </td>

                            <td data-title="觀看明細" style="border-right:1px solid #ebebeb;"><a href="order_details.php?no=<?php echo $row['customer_orderID']; ?>">觀看明細</a></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>

				</div>

			</div>
		</div>
		<?php require_once("../template/footer.php"); ?>
	</div>
</body>
</html>
