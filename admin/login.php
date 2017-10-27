<?php
session_start();
require_once('../connection/database.php');
if (isset($_POST['MM_login']) && $_POST['MM_login'] == 'LOGIN') {
	$sth = $db->query("SELECT * FROM users WHERE account='".$_POST['account']."' AND password='".$_POST['password']."'");
	$user = $sth->fetch(PDO::FETCH_ASSOC);
	$has_user = count($user);
	// php count 統計陣列
	if (isset($user) && $user != null){
		$_SESSION['account'] = $user['account'];
		$_SESSION['picture'] = $user['picture'];
		$_SESSION['name'] = $user['name'];
		$_SESSION['level'] = $user['level'];
		header('Location: news/list.php');
	}else{
		$msg = '登入錯誤，請重新登入';
		header('Location: login.php?msg='.$msg);
	}
}
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>ENJOY HAPPY</title>
  <link rel="stylesheet" href="login/css/all.css">
  <script  src='login/js/jquery.js'></script>
  <script  src="login/js/all.js"></script>

</head>

<body>
  <form name="login-form" class="login-form" action="login.php" method="post">
  <div class="vid-container">
  <div class="inner-container">
    <div class="box">
      <h1>享樂會員登入系統</h1>
      <input name="account" id="account" type="text" value="account" onfocus="this.value=''" /><!--END USERNAME-->
    <!--PASSWORD--><input name="password" id="password" type="password" value="Password" onfocus="this.value=''" /><!--END PASSWORD-->
      <button type="submit" name="submit">登入</button>
      <p>沒有會員? <span>註冊</span></p>

      <?php if(isset($_GET['msg']) && $_GET['msg'] != null){ ?>
      <div class="alert alert-success">
      <strong><?php echo $_GET['msg']; ?></strong>
    </div>
    <?php } ?>
    <input type="hidden" name="MM_login" value="LOGIN">
    </div>
  </div>
</div>
</body>
</html>
