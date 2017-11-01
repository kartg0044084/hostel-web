<?php
require_once('connection/database.php');
$limit=3;
// 判斷目前第幾頁，若沒有page參數就預設為1
if (isset($_GET["page"])) {$page = $_GET["page"]; } else {$page=1; };
// 計算要從第幾筆開始
$start_from = ($page-1) * $limit;
$sth=$db->query("SELECT*FROM news ORDER BY publishedDate DESC LIMIT ".$start_from.",". $limit);
$news=$sth->fetchAll(PDO::FETCH_ASSOC);
$totalRows = count($news);
 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>享樂民宿</title>
<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/all.css">
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.js"></script>
<script src="js/wow.min.js"></script>
</head>

<body>
<div id="container" -fluid>
 <div id="row">
          <!-- nav bar -->
   <div class="button_container" id="toggle">
   <span class="top"></span>
   <span class="middle"></span>
   <span class="bottom"></span>
 </div>
 <div class="overlay" id="overlay">
   <nav class="overlay-menu">
     <ul>
       <li><a href="#">首頁</a></li>
       <li><a href="#">民宿簡介</a></li>
       <li><a href="#">週邊景點</a></li>
       <li><a href="#">客房介紹</a></li>
       <li><a href="#">線上訂房系統</a></li>
       <li><a href="#">套裝行程</a></li>
     </ul>
   </nav>
 </div>
          <!-- nav bar -->
  <div id="top">
    <div class="logo"></div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/pc/123.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc/456.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/pc/789.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div id="content">

<table>
      <?php foreach($news as $row){ ?>
    <tr>
      <td><a href="#"> <?php echo $row['publishedDate'] ?> <?php echo $row['title'] ?> <?php echo mb_substr( $row['content'],0,40,"utf-8")."..."; ?></a></td>
    </tr>
    <?php } ?>
  </table>

<div class="address">
  <p>連絡市話:0234567891</p>
  <p>連絡手機:0901234567</p>
</div>

</div>

<div id="Introduction"></div>

<div id="room">
    <p>房間一覽</p>
    <div class="room1">
      <div><a href="#"><h4>和田雙人套房</h4><br>
      <br>※	冷氣、液晶電視、數位頻道、WIFI
      <br>※	精美牙刷沐浴組(拋棄式盥洗用品)、吹風機、大毛巾、小毛巾。
      <br>※	快煮壺、茶包、礦泉水
      <br>※	精緻拖鞋
      <br>※	觀光飯店等級高級獨立筒雙人床，羽絨被，床單天天換洗
      </a>
      </div>
    </div>
    <div class="room2">
      <div><a href="#"><h4>山嵐套房</h4><br>
      <br>※	冷氣、液晶電視、數位頻道、WIFI
      <br>※	精美牙刷沐浴組(拋棄式盥洗用品)、吹風機、大毛巾、小毛巾。
      <br>※	快煮壺、茶包、礦泉水
      <br>※	精緻拖鞋
      <br>※	觀光飯店等級高級獨立筒雙人床，羽絨被，床單天天換洗
      </a>
      </div>
    </div>
    <div class="room3">
      <div><a href="#"><h4>邀月六人套房</h4><br>
      <br>※	冷氣、液晶電視、數位頻道、WIFI
      <br>※	精美牙刷沐浴組(拋棄式盥洗用品)、吹風機、大毛巾、小毛巾。
      <br>※	快煮壺、茶包、礦泉水
      <br>※	精緻拖鞋
      <br>※	觀光飯店等級高級獨立筒雙人床，羽絨被，床單天天換洗
      </a>
      </div>
    </div>
</div>

 <div id="footer">
<div>

  <div class="list">
  <ul>
    <li><a href="#">開店動機</a></li>
    <li><a href="#">店名由來</a></li>
    <li><a href="#">交通資訊</a></li>
    <li><a href="#">台東市區</a></li>
    <li><a href="#">台東縱谷</a></li>
    <li><a href="#">東海岸線</a></li>
    <li><a href="#">訂房說明</a></li>
    <li><a href="#">貼心服務</a></li>
    <li><a href="#">訂房叮嚀</a></li>
    <li><a href="#" class="icon-google2"> google</a></li>
    <li><a href="#" class="icon-facebook2"> facebook</a></li>
    <li><a href="#" class="icon-twitter"> twitter</a></li>
  </ul>
  </div>



  <div class="mape">
   <img src="img/O1T1U65Y6U.png" alt="">
   <p>享樂民宿</p>
  <p>地址：南投縣仁愛鄉大同村博望巷9-7號</p>
  <p>松崗派出所：049</p>
  </div>


</div>
</div>
 </div>
</div>
<!-- 左側訂房商標 -->
<div id="Reservation" class="icon-home"><a href="#"> 訂房 空房查詢</a></div>
<!-- 左側訂房商標 -->
</body>
</html>
