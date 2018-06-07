<?php
include("share.php");
session_start();

//DB
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
date_default_timezone_set("Asia/Taipei");
$food = $_POST['food'];
$feedback = $_POST['feedback'];
$value = $_POST['value'];
$date = date("y-m-d");
$time = date("h-i-sa");

echo		"<!-- Header -->
			<section id=\"header\">
				<header>
                	<h2>".mb_substr($_SESSION["user"] , 1 , 2 ,'utf8')."，歡迎使用</h2>
					<h1 id=\"logo\"><a href=\"#\">第一週</a></h1>
					<p></p>
				</header>
				<nav id=\"nav\">
					<ul>
						<li><a href=\"/order/week1.php\">第一週</a></li>
						<li><a href=\"/order/week2.php\">第二週</a></li>
						<li><a href=\"/order/week3.php\">第三週</a></li>
						<li><a href=\"/order/week4.php\">第四週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href=\"/order/order1.php\" class=\"button fit\">已點餐點</a></li>
					<li><a href=\"/session.php\" class=\"button fit\">登出</a></li>
				</footer>
			</section>
		<!-- Wrapper -->
			<div id=\"wrapper\">

				<!-- Main -->
					<div id=\"main\">
						<!-- One -->
							<section id=\"one\">
								<div class=\"container\">
									<header class=\"major\">";

if ($food != "" && $feedback != "") {
	$sql = "INSERT INTO feedback (food, feedback, date, time)
	VALUES ('$food', '$feedback', '$date', '$time')";

	if ($conn->query($sql) === TRUE) {
	    echo "<h2>收到了xd</h2>";
	}
} else {
	echo "<h2>欄位不可為空</h2>";
}
echo "</header></div></section></div></div>";
echo "<script type='text/javascript'>";
echo "setTimeout(\"location.href='./week".$value.".php'\",3000)";
echo "</script>";
mysqli_close($conn);
?>
</body>
</html>