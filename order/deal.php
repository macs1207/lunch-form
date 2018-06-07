<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
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

$chk = $_GET["f"];
$userid = $_GET["userid"];
$week = $_GET["week"];
$day = $_GET["day"];
if ($chk == "0") {
	$sql = "INSERT INTO chk (userid, chk, week, day) VALUES ('$userid' , '1' , '$week' , '$day')";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>";
		echo "window.location.href='/order/user".$week.".php'";
		echo "</script>";
	} else {
		echo "錯誤:" . $sql . "<br>" . $conn->error;
	}
} elseif ($chk == "1") {
	$sql = "UPDATE chk SET chk='0' WHERE userid='".$userid."' AND week='".$week."' AND day='".$day."'";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>";
		echo "window.location.href='/order/user".$week.".php'";
		echo "</script>";
	} else {
		echo "錯誤:" . $sql . "<br>" . $conn->error;
	}
} elseif ($chk == "2") {
	$sql = "UPDATE chk SET chk='1' WHERE userid='".$userid."' AND week='".$week."' AND day='".$day."'";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>";
		echo "window.location.href='/order/user".$week.".php'";
		echo "</script>";
	} else {
		echo "錯誤:" . $sql . "<br>" . $conn->error;
	}
}
?>
</body>
</html>