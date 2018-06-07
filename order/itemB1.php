<?php include("share.php"); 
session_start();
//$user = $_SESSION["user"];
$week = "1";

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
                	<h2>資三乙</h2>
					<h1 id="logo"><a href="#">第一週項目排列</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/itemB1.php" class="active">第一週</a></li>
						<li><a href="/order/itemB2.php">第二週</a></li>
						<li><a href="/order/itemB3.php">第三週</a></li>
						<li><a href="/order/itemB4.php">第四週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/userB1.php" class="button fit">用戶排列</a></li>
<!--					<li><a href="/session.php" class="button fit">登出</a></li>-->
				</footer>
			</section>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<!-- One -->
<!--							<section id="one">
								<div class="container">
									<header class="major">
										<h2>星期一</h2>
										<h3>幸福好食堂</h3>
										<button class="button special fit" onclick="display('1')">顯示/隱藏</button>
                                        <div id="1" style="display:none">
										<p>
											<?php
/*											$day = "1";
											$price = 0;
											$sql1 = "SELECT * FROM user1";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
											    while($row1 = $result1->fetch_assoc()) {
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													$pprice = 0;
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()) {
															$pprice = $pprice + $row["price"];
														}
													$price = $price + floor($pprice*0.9);
													}
												}
											}
											$sql = "SELECT * FROM week$week WHERE day='".$day."' ORDER BY name";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元 （打折後）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/itemB$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
*/											?>
                                        </p>
                                        </div>
									</header>
								</div>
							</section>

						<!-- Two -->
<!--							<section id="two">
								<div class="container">
									<header class="major">
										<h2>星期二</h2>
                                        <h3>竹軒園美食館</h3>
										<button class="button special fit" onclick="display('2')">顯示/隱藏</button>
                                        <div id="2" style="display:none">
										<p>
                                            <?php
/*											$day = "2";
											$price = 0;
											$sql1 = "SELECT * FROM user1";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
											    while($row1 = $result1->fetch_assoc()) {
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													$pprice = 0;
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()) {
															$pprice = $pprice + $row["price"];
														}
													$price = $price + $pprice;
													}
												}
											}
											$sql = "SELECT * FROM week$week WHERE day='".$day."' ORDER BY name";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/itemB$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
*/											?>
                                        </p>
                                        </div>
									</header>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<header class="major">
										<h2>星期三</h2>
                                        <h3>竹軒園美食館</h3>
										<button class="button special fit" onclick="display('3')">顯示/隱藏</button>
                                        <div id="3" style="display">       
										<p>
                                            <?php
											$day = "3";
											$price = 0;
											$sql1 = "SELECT * FROM user1 WHERE class='2'";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
											    while($row1 = $result1->fetch_assoc()) {
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													$pprice = 0;
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()) {
															$pprice = $pprice + $row["price"];
														}
													$price = $price + $pprice;
													}
												}
											}
											$sql = "SELECT * FROM week$week WHERE day='".$day."' AND class='2' ORDER BY name";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/itemB$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
                                        </div>
									</header>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<header class="major">
										<h2>星期四</h2>
										<h3>幸福好食堂(9折)</h3>
										<button class="button special fit" onclick="display('4')">顯示/隱藏</button>
                                        <div id="4" style="display:none">
										<p>
                                            <?php
											$day = "4";
											$price = 0;
											$sql1 = "SELECT * FROM user1  WHERE class='2'";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
											    while($row1 = $result1->fetch_assoc()) {
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													$pprice = 0;
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()) {
															$pprice = $pprice + $row["price"];
														}
													$price = $price + floor($pprice*0.9);
													}
												}
											}
											$sql = "SELECT * FROM week$week WHERE day='".$day."' AND class='2' ORDER BY name";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元 （打折後）</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/itemB$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
                                        </div>
									</header>
								</div>
							</section>

						<!-- Five -->
						
							<section id="five">
                            	<div class="container">
									<header class="major">
										<h2>星期五</h2>
                                        <h3>竹軒園美食館</h3>
										<button class="button special fit" onclick="display('5')">顯示/隱藏</button>
                                        <div id="5" style="display:none">
										<p>
                                            <?php
											$day = "5";
											$price = 0;
											$sql1 = "SELECT * FROM user1  WHERE class='2'";
											$result1 = $conn->query($sql1);
											if ($result1->num_rows > 0) {
											    while($row1 = $result1->fetch_assoc()) {
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													$pprice = 0;
													if ($result->num_rows > 0) {
														while($row = $result->fetch_assoc()) {
															$pprice = $pprice + $row["price"];
														}
													$price = $price + $pprice;
													}
												}
											}
											$sql = "SELECT * FROM week$week WHERE day='".$day."' AND class='2' ORDER BY name";
											$result = $conn->query($sql);
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["user"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
											    }
												echo "<br>";
												echo "<p>目前總價： ".$price."元</p><br>";
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/itemB$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
											?>
                                        </p>
                                        </div>
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