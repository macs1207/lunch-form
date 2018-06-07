<?php
include("share.php");
session_start();
if (isset($_SESSION["user"])) {
	$class = $_SESSION["class"];
	if($_SESSION["class"]=="1") $choice = "1";
	else if($_SESSION["class"]=="2") $choice = "2";
	$week = "3";
?>
<script>
function display(id){
	var traget=document.getElementById(id);
	if(traget.style.display=="none"){
		traget.style.display="";
	}else{
		traget.style.display="none";
	}
}
</script>

		<!-- Header -->
			<section id="header">
				<header>
                	<h2><?php session_start(); echo mb_substr($_SESSION["user"] , 1 , 2 ,'utf8'); ?>，歡迎使用</h2>
					<h1 id="logo"><a href="#">第三週</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/week1.php">第一週</a></li>
						<li><a href="/order/week2.php">第二週</a></li>
						<li><a href="/order/week3.php" class="active">第三週&nbsp;&nbsp;0731-0804</a></li>
						<li><a href="/order/week4.php">第四週</a></li>
   						<li><a href="/order/week5.php">第五週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/order3.php" class="button fit">已點餐點</a></li>
					<li><a href="/session.php" class="button fit">登出</a></li>
				</footer>
			</section>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
                            <section>
                  				<div class="container">
									<header class="major">
                                    	<h3>意見回饋（無記名）</h3>
	                                    <button class="button special fit" onclick="display('feedback')">意見回饋</button>
                                        <div id="feedback" style="display:none">
                                        	<form method="post" action="./feedback.php">
                                         		<input type="hidden" name="value" value="1"/>
												<label>餐點：</label>
	                                        		<input type="text" name="food"/>
	                                           	<label>可改進的地方：</label>
    	                                       	 	<textarea name="feedback" id="message" placeholder="可改進的地方" rows="6"></textarea>
                                                <input type="submit" value="送出" class="button special fit"/>
                                            </form>
                                        </div>
									</header>
								</div>
							</section>

						<!-- One -->
							<section id="one">
								<div class="container">
									<header class="major">
										<h2>星期一</h2>
                                        <?php
											$day = "one";
											$dayNum = "1";
											if($class=="1") include("list1.php");
											else if($class=="2") include("list2.php");
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
											if($class=="1") include("list2.php");
											else if($class=="2") include("list1.php");
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
											if($class=="1") include("list1.php");
											else if($class=="2") include("list2.php");
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
											if($class=="1") include("list2.php");
											else if($class=="2") include("list1.php");
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
											if($class=="1") include("list1.php");
											else if($class=="2") include("list2.php");
										?>
                                	</header>
								</div>
							</section>					
                            </div>
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
	echo "<h1 id=\"logo\"><a href=\"#\">第三週已點餐點</a></h1>";
	echo "<p></p>";
	echo "</header>";
	echo "<nav id=\"nav\">";
	echo "<ul>";
	echo "<li><a href=\"/order/order1.php\">第一週</a></li>";
	echo "<li><a href=\"/order/order2.php\">第二週</a></li>";
	echo "<li><a href=\"/order/order3.php\" class=\"active\">第三週</a></li>";
	echo "<li><a href=\"/order/order4.php\">第四週</a></li>";
	echo "<li><a href=\"/order/order5.php\">第五週</a></li>";
	echo "</ul>";
	echo "</nav>";
	echo "<footer>";
	echo "<li><a href=\"/order/order3.php\" class=\"button fit\">已點餐點</a></li>";
	echo "<li><a href=\"/session.php\" class=\"button fit\">登出</a></li>";
	echo "</footer>";
	echo "</section>";
	echo "<section><h2>請重新登入</h2></section>";
	echo "<script type='text/javascript'>";
	echo "setTimeout(\"location.href='/'\",3000)";
	echo "</script>";
}
?>
	</body>
</html>