<?php
										echo ("<h3>竹軒園美食館</h3>");
										echo ("<p>");											
											$sql = "SELECT * FROM week$week WHERE user='" . $user . "' and day='".$dayNum."'";
											$result = $conn->query($sql);
											$price = 0;
											if ($result->num_rows > 0) {
										    	// output data of each row
												echo("<label>已點餐點</label>");
												echo ("<form  method=\"post\" />");
											    while($row = $result->fetch_assoc()) {
													echo ("<input type=\"checkbox\" id=\"" . $row["id"] . "\" name=\"order[]\" value=\"" . $row["id"] . "\">") ;
													echo ("<label for=\"" . $row["id"] . "\">".$row["name"]."&nbsp;&nbsp;價格： ".$row["price"]."</label><br>");
													$price = $price + $row["price"];
											    }
												$no = $_SESSION["no"];
												$sql1 = "SELECT chk FROM chk WHERE week='".$week."' AND day='".$dayNum."' AND userid='".$no."'";
												$result1 = $conn->query($sql1);
												$f = "0";
												if ( $result1->num_rows > 0) {
													while($row1 = $result1->fetch_assoc()) {
														if ($row1["chk"] == "1") {$f = "1";}
														if ($row1["chk"] == "0") {$f = "2";}
													}
												}
												echo "<br>";
												if ($f == "1"){
													echo "<p>目前總價： ".$price."元 已付清</p><br>";
												} else {
													echo "<p>目前總價： ".$price."元</p><br>";
													$tprice = $tprice + $price;
												}
												echo ("<input type=\"submit\" value=\"刪除\" class=\"button fit\"></form>");
											} else {
											    echo "尚未登記點餐<br><a href=\"/order/week$week.php#$day\" class=\"button special fit\">點餐</a>";
											}
											$order = $_POST["order"];
											$cnt = $result->num_rows;
											$i = 0;
											for ($i = 0; $i <= $cnt; $i++){
												if ($order[$i] != "") {		
													$sql = "DELETE FROM week$week WHERE id='" .$order[$i]. "' ";
													if (mysqli_query($conn, $sql)) {
														echo "<script type='text/javascript'>";
														echo "window.location.href='/order/order$week.php'";
														echo "</script>";
													} else {
														echo "錯誤: " . mysqli_error($conn);
													}
												}
											}
                                        echo ("</p>");

?>