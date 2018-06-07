<?php 
include("share.php"); 
session_start();
if (isset($_SESSION["user"])) {
$user = $_SESSION["user"];
$class = $_SESSION["class"];
$week = "2";
$tprice = 0;
$servername = "127.7.213.130";
$dbname = "lunch";
$username = "adminGbZmC13";
$password = "2a86YKfLWDml";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

		<!-- Header -->
			<section id="header">
				<header>
                	<h2><?php echo mb_substr($_SESSION["user"] , 1 , 2 ,'utf8'); ?>，歡迎使用</h2>
					<h1 id="logo"><a href="#">第二週已點餐點</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/order1.php">第一週</a></li>
						<li><a href="/order/order2.php"class="active">第二週&nbsp;&nbsp;0727-0728</a></li>
						<li><a href="/order/order3.php">第三週</a></li>
						<li><a href="/order/order4.php">第四週</a></li>
                        <li><a href="/order/order5.php">第五週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/week2.php" class="button fit">點餐</a></li>
					<li><a href="/session.php" class="button fit">登出</a></li>
				</footer>
			</section>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
                                    	<h2>星期一</h2>
	                                    <?php
										$day = "one";
										$dayNum = "1";
										if($class=="1")
											include("b.php");
										else if($class=="2")
											include("a.php");

    	                                ?>
									</header>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<header class="major">
										<h2>星期二</h2>
                                        <?php
										$day = "two";
										$dayNum = "2";
										if($class=="1")
											include("a.php");
										else if($class=="2")
											include("b.php");

										?>
									</header>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<header class="major">
										<h2>星期三</h2>
										<?php
										$day = "three";
										$dayNum = "3";
										if($class=="1")
											include("b.php");
										else if($class=="2")
											include("a.php");

										?>
									</header>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<header class="major">
										<h2>星期四</h2>
                                        <?php
										$day = "four";
										$dayNum = "4";
										if($class=="1")
											include("a.php");
										else if($class=="2")
											include("b.php");

										?>
									</header>
								</div>
							</section>

						<!-- Five -->
						
							<section id="five">
                            	<div class="container">
									<header class="major">
										<h2>星期五</h2>
                                        <?php
										$day = "five";
										$dayNum = "5";
										if($class=="1")
											include("b.php");
										else if($class=="2")
											include("a.php");
										echo "<p>本周餘賬： ".$tprice."元</p><br>";
										$sql = "UPDATE price SET price$week='".$tprice."' WHERE userid='".$no."'";
										if ($conn->query($sql) === TRUE) {
											echo 更新資料庫成功;
										}
										?>
									</header>
								</div>
							</section>					
					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<?php
} else {
	echo "<section id=\"header\">";
	echo "<header>";
	echo "<h1 id=\"logo\"><a href=\"#\">錯誤</a></h1>";
	echo "<p></p>";
	echo "</header>";
	echo "<nav id=\"nav\">";
	echo "<ul>";
	echo "<li><a href=\"/order/order1.php\">第一週</a></li>";
	echo "<li><a href=\"/order/order2.php\">第二週</a></li>";
	echo "<li><a href=\"/order/order3.php\">第三週</a></li>";
	echo "<li><a href=\"/order/order4.php\">第四週</a></li>";
	echo "<li><a href=\"/order/order5.php\">第五週</a></li>";
	echo "</ul>";
	echo "</nav>";
	echo "<footer>";
	echo "<li><a href=\"/order/week2.php\" class=\"button fit\">點餐</a></li>";
	echo "<li><a href=\"/session.php\" class=\"button fit\">登出</a></li>";
	echo "</footer>";
	echo "</section>";
	echo "<section><h2>請重新登入</h2></section>";
	echo "<script type='text/javascript'>";
	echo "setTimeout(\"location.href='/'\",3000)";
	echo "</script>";
	$conn->close();
}
?>
	</body>
</html>