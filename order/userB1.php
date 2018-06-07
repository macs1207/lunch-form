<?php include("share.php"); 
session_start();
$user = $_SESSION["user"];
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
function check_all(obj,cName) 
{ 
    var checkboxs = document.getElementsByName(cName); 
    for(var i=0;i<checkboxs.length;i++){checkboxs[i].checked = obj.checked;} 
} 
</script>

		<!-- Header -->
			<section id="header">
				<header>
                	<h2>管理頁</h2>
					<h1 id="logo"><a href="#">第一週用戶排列</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/user1.php" class="active">第一週</a></li>
						<li><a href="/order/user2.php">第二週</a></li>
						<li><a href="/order/user3.php">第三週</a></li>
						<li><a href="/order/user4.php">第四週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/item1.php" class="button fit">項目排列</a></li>
					<li><a href="/session.php" class="button fit">登出</a></li>
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
                                        <button class="button special fit" onclick="display('1')">顯示/隱藏</button>
                                        <div id="1" style="display:none">
										<h3>幸福好食堂</h3>
										<p>
											<?php
/*											$day = "1";
											$sql1 = "SELECT * FROM user1 ORDER BY no";
											$result1 = $conn->query($sql1);
											$price = 0;
											$none = "";
											if ($result1->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
											    while($row1 = $result1->fetch_assoc()) {
													$sql2 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$day."' AND userid='".$row1["no"]."'";
													$result2 = $conn->query($sql2);
													$f = "0";
													if ( $result2->num_rows > 0) {
														while($row2 = $result2->fetch_assoc()) {
															if ($row2["chk"] == "1") {$f = "1";}
															if ($row2["chk"] == "0") {$f = "2";}
														}
													}
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
//													echo ("<form  method=\"post\" />");
//													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													if ($result->num_rows != "0") {
														if ($f == "1"){
															echo ("<a href=\"/order/deal.php?f=1&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
															echo "&nbsp;&nbsp;（已付清）";
														} elseif ($f == "0") {
															echo ("<a href=\"/order/deal.php?f=0&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														} elseif ($f == "2") {
															echo ("<a href=\"/order/deal.php?f=2&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														}
														$pprice = 0;
														echo "<p>";
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()) {
																echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格：".$row["price"]."</p>";
																$pprice = $pprice + $row["price"];
															}
														$price = $price + floor($pprice*0.9);
														echo "</p>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;個人總價： ".floor($pprice*0.9)."";
														}
														echo ("</label></p>");
													} elseif ($result->num_rows == 0) {
														$none = "".$none."&nbsp;&nbsp;".$row1["name"]."";
														echo "</p></label></p>";
													}
											    }
												echo "未登記：".$none."";
												echo "<br />";
												echo "<p>目前總價： ".$price."元 （打折後）</p><br>";
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
                                         <button class="button special fit" onclick="display('2')">顯示/隱藏</button>
                                        <div id="2" style="display:none">
                                        <h3>竹軒園美食館</h3>
										<p>
                                            <?php
/*											$day = "2";
											$sql1 = "SELECT * FROM user1 ORDER BY no";
											$result1 = $conn->query($sql1);
											$price = 0;
											$none = "";
											if ($result1->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
											    while($row1 = $result1->fetch_assoc()) {
													$sql2 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$day."' AND userid='".$row1["no"]."'";
													$result2 = $conn->query($sql2);
													$f = "0";
													if ( $result2->num_rows > 0) {
														while($row2 = $result2->fetch_assoc()) {
															if ($row2["chk"] == "1") {$f = "1";}
															if ($row2["chk"] == "0") {$f = "2";}
														}
													}
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													if ($result->num_rows != "0") {
														echo ("<p><label>");
														if ($f == "1"){
															echo ("<a href=\"/order/deal.php?f=1&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
															echo "&nbsp;&nbsp;（已付清）";
														} elseif ($f == "0") {
															echo ("<a href=\"/order/deal.php?f=0&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														} elseif ($f == "2") {
															echo ("<a href=\"/order/deal.php?f=2&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														}
														$pprice = 0;
														echo "<p>";
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()) {
																echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格：".$row["price"]."</p>";
																$pprice = $pprice + $row["price"];
															}
														$price = $price + $pprice;
														echo "</p>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;個人總價： ".$pprice."";
														}
														echo ("</label></p>");
													} elseif ($result->num_rows == 0) {
														$none = "".$none."&nbsp;&nbsp;".$row1["name"]."";
														echo "</p></label></p>";
													}
											    }
												echo "未登記：".$none."";
												echo "<br />";
												echo "<p>目前總價： ".$price."元</p><br>";
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
                                        <button class="button special fit" onclick="display('3')">顯示/隱藏</button>
                                        <div id="3" style="display:none">
										<h3>幸福好食堂(9折)</h3>
										<p>
                                            <?php
											$day = "3";
											$sql1 = "SELECT * FROM user1 ORDER BY no";
											$result1 = $conn->query($sql1);
											$price = 0;
											$none = "";
											if ($result1->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
											    while($row1 = $result1->fetch_assoc()) {
													$sql2 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$day."' AND userid='".$row1["no"]."'";
													$result2 = $conn->query($sql2);
													$f = "0";
													if ( $result2->num_rows > 0) {
														while($row2 = $result2->fetch_assoc()) {
															if ($row2["chk"] == "1") {$f = "1";}
															if ($row2["chk"] == "0") {$f = "2";}
														}
													}
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													if ($result->num_rows != "0") {
														echo ("<p><label>");
														if ($f == "1"){
															echo ("<a href=\"/order/deal.php?f=1&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
															echo "&nbsp;&nbsp;（已付清）";
														} elseif ($f == "0") {
															echo ("<a href=\"/order/deal.php?f=0&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														} elseif ($f == "2") {
															echo ("<a href=\"/order/deal.php?f=2&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														}
														$pprice = 0;
														echo "<p>";
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()) {
																echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格：".$row["price"]."</p>";
																$pprice = $pprice + $row["price"];
															}
														$price = $price + floor($pprice*0.9);
														echo "</p>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;個人總價： ".floor($pprice*0.9)."";
														}
														echo ("</label></p>");
													} elseif ($result->num_rows == 0) {
														$none = "".$none."&nbsp;&nbsp;".$row1["name"]."";
														echo "</p></label></p>";
													}
											    }
												echo "未登記：".$none."";
												echo "<br />";
												echo "<p>目前總價： ".$price."元 （打折後）</p><br>";
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
                                        <button class="button special fit" onclick="display('4')">顯示/隱藏</button>
                                        <div id="4" style="display:none">
                                        <h3>竹軒園美食館</h3>
										<p>
                                            <?php
											$day = "4";
											$sql1 = "SELECT * FROM user1 ORDER BY no";
											$result1 = $conn->query($sql1);
											$price = 0;
											$none = "";
											if ($result1->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
											    while($row1 = $result1->fetch_assoc()) {
													$sql2 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$day."' AND userid='".$row1["no"]."'";
													$result2 = $conn->query($sql2);
													$f = "0";
													if ( $result2->num_rows > 0) {
														while($row2 = $result2->fetch_assoc()) {
															if ($row2["chk"] == "1") {$f = "1";}
															if ($row2["chk"] == "0") {$f = "2";}
														}
													}
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													if ($result->num_rows != "0") {
														echo ("<p><label>");
														if ($f == "1"){
															echo ("<a href=\"/order/deal.php?f=1&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
															echo "&nbsp;&nbsp;（已付清）";
														} elseif ($f == "0") {
															echo ("<a href=\"/order/deal.php?f=0&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														} elseif ($f == "2") {
															echo ("<a href=\"/order/deal.php?f=2&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														}
														$pprice = 0;
														echo "<p>";
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()) {
																echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格：".$row["price"]."</p>";
																$pprice = $pprice + $row["price"];
															}
														$price = $price + $pprice;
														echo "</p>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;個人總價： ".$pprice."";
														}
														echo ("</label></p>");
													} elseif ($result->num_rows == 0) {
														$none = "".$none."&nbsp;&nbsp;".$row1["name"]."";
														echo "</p></label></p>";
													}
											    }
												echo "未登記：".$none."";
												echo "<br />";
												echo "<p>目前總價： ".$price."元</p><br>";
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
                                        <button class="button special fit" onclick="display('5')">顯示/隱藏</button>
                                        <div id="5" style="display:none">
										<h3>幸福好食堂(9折)</h3>
										<p>
                                            <?php
											$day = "5";
											$sql1 = "SELECT * FROM user1 ORDER BY no";
											$result1 = $conn->query($sql1);
											$price = 0;
											$none = "";
											if ($result1->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
											    while($row1 = $result1->fetch_assoc()) {
													$sql2 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$day."' AND userid='".$row1["no"]."'";
													$result2 = $conn->query($sql2);
													$f = "0";
													if ( $result2->num_rows > 0) {
														while($row2 = $result2->fetch_assoc()) {
															if ($row2["chk"] == "1") {$f = "1";}
															if ($row2["chk"] == "0") {$f = "2";}
														}
													}
													$sql = "SELECT * FROM week$week WHERE day='".$day."' AND userid='".$row1["no"]."'";
													$result = $conn->query($sql);
													if ($result->num_rows != "0") {
														echo ("<p><label>");
														if ($f == "1"){
															echo ("<a href=\"/order/deal.php?f=1&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
															echo "&nbsp;&nbsp;（已付清）";
														} elseif ($f == "0") {
															echo ("<a href=\"/order/deal.php?f=0&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														} elseif ($f == "2") {
															echo ("<a href=\"/order/deal.php?f=2&userid=".$row1["no"]."&week=".$week."&day=".$day."\">".$row1["name"]."</a>");
														}
														$pprice = 0;
														echo "<p>";
														if ($result->num_rows > 0) {
															while($row = $result->fetch_assoc()) {
																echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["name"]."&nbsp;&nbsp;價格：".$row["price"]."</p>";
																$pprice = $pprice + $row["price"];
															}
														$price = $price + floor($pprice*0.9);
														echo "</p>";
														echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;個人總價： ".floor($pprice*0.9)."";
														}
														echo ("</label></p>");
													} elseif ($result->num_rows == 0) {
														$none = "".$none."&nbsp;&nbsp;".$row1["name"]."";
														echo "</p></label></p>";
													}
											    }
												echo "未登記：".$none."";
												echo "<br />";
												echo "<p>目前總價： ".$price."元 （打折後）</p><br>";
											}
											?>
                                        </p>
                                        </div>
									</header>
								</div>
							</section>
                            					
                            <section>
                  				<div class="container">
									<header class="major">
                                    	<h2>總價</h2>
                                        <div id="total">
                                        	<?php
                                            $sql = "SELECT userid, price$week FROM price ORDER BY userid";
											$result = $conn->query($sql);

											if ($result->num_rows > 0) {
						    					// output data of each row
					    						while($row = $result->fetch_assoc()) {
													if ($row["price$week"] != "0") {
											        echo "<p>". $row["userid"]."&nbsp;&nbsp;".$row["price$week"]."</p>";
													$tprice = $tprice + $row["price$week"];
													}
											    }
											} else {
												echo "0 results";
											}
											echo $tprice;
											$conn->close();
											?>
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