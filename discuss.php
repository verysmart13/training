<?php
session_start();
mysql_connect("localhost","verysmart13","rasu26qofo");
mysql_select_db("verysmart13");
mysql_query ("set names utf8");   
if($_POST['type']!=''){
		$type=$_POST['type'];
        $classic=$_POST['classic'];
      	$motivation=$_POST['motivation'];
      	$income=$_POST['income'];
       	$dt=mysql_query("select * from Total where (職業='$classic' or 購買動機='$motivation' or income='$income') and 選擇的商品='$type'");}
		else{
	    $classic=$_POST['classic'];
      	$motivation=$_POST['motivation'];
      	$income=$_POST['income'];
			$dt=mysql_query("select * from Total where 職業='$classic' or 購買動機='$motivation' or income='$income'");
}
?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>3c_WorkShop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="new_index.html" class="logo"><strong>3c_WorkShop</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>篩選</h1>
									</header>

									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>

									
	<form name="searching" method="post" action="">
1. 請問您的職業別：<br/>
<select name="classic">
<option value="">請選擇</option>
<option value="B">一般公司、企業員工上班族</option>
<option value="C">一般公司、企業中級以上主管</option>
<option value="C">自營商</option>
<option value="D">勞務工作者</option>
<option value="B">學生</option>
<option value="A">家庭主婦</option>
<option value="A">待業中</option>
<option value="A">已退休</option>
<option value="B">公務員</option>
</select>
<br/>
2. 您的購買動機是：<br/>
<select name="motivation">
<option value="">請選擇</option>
<option value="30">休閒娛樂</option>
<option value="20">生活必需品</option>
<option value="20">課業</option>
<option value="40">工作需求</option>
<option value="30">趨勢流行</option>
<option value="20">提升個人競爭力</option>
<option value="40">規格更新</option>
<option value="10">便宜就買</option>
<option value="10">其他</option>
</select>
<br/>
3. 請問您想選擇的商品是：<br/>
<select name="type">
<option value="">請選擇</option>
<option value="5">桌上型電腦</option>
<option value="6">筆記型電腦</option>
<option value="7">平板電腦</option>
<option value="8">手機</option>
</select>
<br/>
4. 您的考量價位：<br/>
<select name="income">
<option name="income" id="income0" value="">請選擇</option>
<option id="income1" value="1">10000元以下</option>
<option id="income2" value="2">10001-20000元</option>
<option id="income3" value="3">20001-30000元</option>
<option name="income" id="income4" value="4">30001-40000元</option>
</select>
<br/>
<input type="submit" id="button" value="確定">

</form>
<table width="500" border="1">
   <tr>
    <td >機種</td>
    <td >名稱</td>
    <td >廠牌</td>
    <td >價格</td>
  </tr>
  <?php
  for($i=1;$i<=mysql_num_rows($dt);$i++){
$rs=mysql_fetch_row($dt);
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
  </tr>
  
  <?php
}
?>
								<hr class="major" />
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="new_index.html">主頁</a></li>
										<li><a href="generic.php">篩選</a></li>
										<li>
											<span class="opener">商品</span>
											<ul>
												<li><a href="keyboard.php">鍵盤</a></li>
												<li><a href="motherboard.php">主機板</a></li>
												<li><a href="mouse.php">滑鼠</a></li>
											</ul>
										</li>
									</ul>
								</nav>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>聯絡我們</h2>
									</header>
									<p>有哪些地方需要改進，請不吝指教，感謝您的意見。</p>
									<ul class="contact">
										<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
										<li class="fa-phone">(02) 000-0000</li>
										<li class="fa-home">地址<br />
										Nashville, TN 00000-0000</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>