<?php 
session_start();
mysql_connect("localhost","verysmart13","rasu26qofo");
mysql_select_db("verysmart13");
mysql_query ("set names utf8"); 
if(isset($_POST['guestReply'])){
 $guestReply=$_POST['guestReply'];
 $time=date("Y:m:d H:i:s",time()+28800);
 mysql_query("inssert into MessageboardR value(guestReply='$guestReply',guestReplyTime = '$time') where guestID = '$id'");
 header("location:message.php");
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
<style>
.top{
 margin:auto;
 width:60vw;
 text-align:right;
 padding:15vh 0 0 0;
 font-family:微軟正黑體;
}
/*.nav{
 background-color:#339;
 padding: 10px 0px;
 }*/
.nav a {
  color: #5a5a5a;
  font-size: 11px;
  font-weight: bold;
  text-transform: uppercase;
}

.nav li {
  display: inline;
}
 .CSSTableGenerator {
 margin:auto;
 padding:0px;
 width:60vw;
 }
 .CSSTableGenerator table{
    border-collapse: collapse;
    border-spacing: 0;
 width:100%;
 height:100%;
 margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
 -moz-border-radius-bottomright:9px;
 -webkit-border-bottom-right-radius:9px;
 border-bottom-right-radius:9px;
}
.CSSTableGenerator table tr:first-child td:first-child {
 -moz-border-radius-topleft:9px;
 -webkit-border-top-left-radius:9px;
 border-top-left-radius:9px;
}
.CSSTableGenerator table tr:first-child td:last-child {
 -moz-border-radius-topright:9px;
 -webkit-border-top-right-radius:9px;
 border-top-right-radius:9px;
 
}.CSSTableGenerator tr:last-child td:first-child{
 -moz-border-radius-bottomleft:9px;
 -webkit-border-bottom-left-radius:9px;
 border-bottom-left-radius:9px;
 
}.CSSTableGenerator tr:hover td{
 background-color:#005fbf;
 color:white;
}
.CSSTableGenerator td{
 vertical-align:middle;
 background-color:#e5e5e5;
 border:1px solid #999999;
 border-width:0px 1px 1px 0px;
 text-align:left;
 padding:8px;
 font-size:16px;
 font-family:Arial,微軟正黑體;
 font-weight:normal;
 color:#000000;
}.CSSTableGenerator tr:last-child td{
 border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
 border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
 border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
  text-align:center;
  font-size:20px;
  font-family:Arial, 微軟正黑體;
  font-weight:bold;
  color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
  background:-o-linear-gradient(bottom, #005fbf 5%, #005fbf 100%); 
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #005fbf), color-stop(1, #005fbf) );
  background:-moz-linear-gradient( center top, #005fbf 5%, #005fbf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#005fbf", endColorstr="#005fbf"); 
  background: -o-linear-gradient(top,#005fbf,005fbf);
  background-color:#005fbf;
}
</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>意見交流區</h1>
									</header>

									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>
<div class="top">
</div>
      
<p>&nbsp;</p>
<p>&nbsp;</p>
									
<?php
for($i=1;$i<=mysql_num_rows($data);$i++){
 $rs=mysql_fetch_assoc($data);
?>
<div class="container">
  <div class="CSSTableGenerator">
      <table align="center">
            <tr>
              <td><?php echo $rs['commodityName']?></td>
            </tr>
			<tr>
              <td><?php echo $rs['guestSubject']?></td>
              <td><a href="p13-reply.php?id=<?php echo $rs['guestID'] ?>">回覆</a>
            </tr>
            <tr>
              <td width="25%">暱稱</td>
              <td width="75%"><?php echo $rs['guestName']?></td>
            </tr>
            <tr>
              <td>適用對象</td>
              <td><?php echo $rs['commoditySuit']?></td>
            </tr>
            <tr>
              <td>留言內容</td>
              <td><?php echo $rs['guestContent']?></td>
            </tr>
        </table>
        </div>
        </div>
<br />
<?php } ?>
<div class="reply">
 <div class="container">
     <form id="form1" name="form1" method="post" action="">
         <div class="form-group">
             <label for="guestReply" class="col-ms-6 control-label">回覆內容：</label>
                <div class="col-ms-6">
                 <textarea class="form-control" rows="8" id="guestReply" name="guestReply"/></textarea>
                </div>
            </div>
            <div class="button">
             <input type="submit" class="btn" value="回覆"/>
            </div>
        </form>
    </div>
</div>
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
											<span class="opener">瀏覽</span>
											<ul>
												<li><a href="Merchandise.php">電腦周邊</a></li>
												<li><a href="DIY.php">DIY組件</a></li>
											</ul>
										</li>
										<li><a href="message.php">交流平台</a></li>
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