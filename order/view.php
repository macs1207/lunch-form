<?php
include("share.php");
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
?>
		<!-- Header -->
			<section id="header">
				<header>
                	<h2>管理頁 意見回饋表</h2>
					<h1 id="logo"><a href="#">第一週</a></h1>
					<p></p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="/order/week1.php">第一週</a></li>
						<li><a href="/order/week2.php">第二週</a></li>
						<li><a href="/order/week3.php">第三週</a></li>
						<li><a href="/order/week4.php">第四週</a></li>
					</ul>
				</nav>
				<footer>
                	<li><a href="/order/order1.php" class="button fit">已點餐點</a></li>
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
                                    	<h2>意見回饋表</h2>
                                        <p>
                                        <?php
                                        $sql = "SELECT food, feedback, date, time FROM feedback";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
										    // output data of each row
										    while($row = $result->fetch_assoc()) {
										        echo "<p>".$row["food"]."&nbsp;&nbsp;&nbsp;&nbsp;".$row["feedback"]."&nbsp;&nbsp;".$row["date"]."&nbsp;".$row["time"]."&nbsp;</p>";
										    }
										} else {
										    echo "尚未有意見回饋";
										}
										$conn->close();
										?>
                                        </p>
									</header>
								</div>
							</section>
					</div>
			</div>

</body>
</html>