<?php include("share.php"); 
session_start();
$user = $_SESSION["user"];
$week = "3";

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
                	<h2>管理頁</h2>
					<h1 id="logo"><a href="#">第三週項目排列</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/item1.php">第一週</a></li>
						<li><a href="/order/item2.php">第二週</a></li>
						<li><a href="/order/item3.php" class="active">第三週</a></li>
						<li><a href="/order/item4.php">第四週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/user3.php" class="button fit">用戶排列</a></li>
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
										<h3>幸福好食堂</h3>
										<p>
											<?php
											$week = "3";
											$day = "1";
											$sql = "SELECT * FROM week3 WHERE day='1' ORDER BY name";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												echo "<br>";
												echo "<p>目前總價： ".floor($price*0.9)."元 （打折後）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week3 WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/item3.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
									</header>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<header class="major">
										<h2>星期二</h2>
                                        <h3>竹軒園美食館</h3>
										<p>
                                            <?php
											$day = "2";
											$sql = "SELECT * FROM week3 WHERE day='2' ORDER BY name";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元 （不含時價）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week3 WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/item3.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
									</header>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<header class="major">
										<h2>星期三</h2>
										<h3>幸福好食堂(9折)</h3>
										<p>
                                            <?php
											$day = "3";
											$sql = "SELECT * FROM week3 WHERE day='3' ORDER BY name";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												echo "<br>";
												echo "<p>目前總價： ".floor($price*0.9)."元 （打折後）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week3 WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/item3.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
									</header>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<header class="major">
										<h2>星期四</h2>
                                        <h3>竹軒園美食館</h3>
										<p>
                                            <?php
											$day = "4";
											$sql = "SELECT * FROM week3 WHERE day='4' ORDER BY name";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元 （不含時價）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week3 WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/item3.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
									</header>
								</div>
							</section>

						<!-- Five -->
						
							<section id="five">
                            	<div class="container">
									<header class="major">
										<h2>星期五</h2>
										<h3>幸福好食堂(9折)</h3>
										<p>
                                            <?php
											$day = "5";
											$sql = "SELECT * FROM week3 WHERE day='5' ORDER BY name";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												echo "<br>";
												echo "<p>目前總價： ".floor($price*0.9)."元 （打折後）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week3 WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/item3.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
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

	</body>
</html>