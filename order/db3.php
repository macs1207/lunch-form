<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?php
session_start();
$user = $_SESSION["user"];
$no = $_SESSION["no"];

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
//星期一
$day = $_POST['week'];
if ($day == "1")
{
	$one = $_POST['one'];
	for ($i=0; $i<=9; $i++) {
		if ($one[$i] != "") {
			$name = mb_substr($one[$i] , 0 , -4 ,'utf8');
			$price = mb_substr($one[$i] , -3 , 2 ,'utf8');
			$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name', '$price', '$day' , '$no')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order3.php'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($day == "3")
{
	$three = $_POST['three'];
	for ($i=0; $i<=9; $i++) {
		if ($three[$i] != "") {
			$name = mb_substr($three[$i] , 0 , -4 ,'utf8');
			$price = mb_substr($three[$i] , -3 , 2 ,'utf8');
			$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name', '$price', '$day' , '$no')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order3.php'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($day == "5")
{
	$five = $_POST['five'];
	for ($i=0; $i<=9; $i++) {
		if ($five[$i] != "") {
			$name = mb_substr($five[$i] , 0 , -4 ,'utf8');
			$price = mb_substr($five[$i] , -3 , 2 ,'utf8');
			$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name', '$price', '$day' , '$no')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order3.php'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($day == "2")
{
	$two = $_POST['two'];	
	for ($i=0; $i<=9; $i++) {
		if ($two[$i] != "") {
			$name = array(
				"55-1" => "蝦仁排飯",
				"55-2" => "咖哩雞飯",
				"55-3" => "鹹魚飯",
				"55-4" => "糖醋魚飯",
				"55-5" => "軟骨魚飯",
				"55-7" => "蔥爆豬肉飯",
				"55-8" => "黑胡椒排骨飯",
				"55-9" => "豆汁排骨飯",
				"55-10" => "雞排飯",
				"55-12" => "酥脆雞翅飯",
				"55-13" => "三杯雞飯",
				"60-1" => "腿排飯",
				"60-2" => "肉魚飯",
				"60-3" => "魚肚飯",
				"60-4" => "白帶魚飯",
				"60-5" => "秋刀魚飯",
				"60-6" => "招牌排骨飯",
				"60-8" => "爌肉飯",
				"60-9" => "豬腳飯",
				"60-10" => "雞腿飯（小）",
				"60-11" => "咔啦雞腿飯",
				"60-12" => "雞塊飯",
				"70-1" => "魚排飯",
				"75-1" => "雞腿飯（大）",
				"1" => "吳郭魚飯",
				"2" => "金線魚飯",
			);
			$price = mb_substr($two[$i] , 0 , 2 ,'utf8');
			$t = $two[$i];
			if ($t == "1" || $t == "2") {
				$price = "時價";
				$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name[$t]', '$price', '$day', '$no')";
				if (mysqli_query($conn, $sql)) {
					echo "<script type='text/javascript'>";
					echo "window.location.href='/order/order3.php'";
					echo "</script>";
				} else {
					echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
				}
			} else {
				$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name[$t]', '$price', '$day', '$no')";
				if (mysqli_query($conn, $sql)) {
					echo "<script type='text/javascript'>";
					echo "window.location.href='/order/order3.php'";
					echo "</script>";
				} else {
					echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
	}
}
if ($day == "4")
{
	$four = $_POST['four'];	
	for ($i=0; $i<=9; $i++) {
		if ($four[$i] != "") {
			$name = array(
				"55-1" => "蝦仁排飯",
				"55-2" => "咖哩雞飯",
				"55-3" => "鹹魚飯",
				"55-4" => "糖醋魚飯",
				"55-5" => "軟骨魚飯",
				"55-7" => "蔥爆豬肉飯",
				"55-8" => "黑胡椒排骨飯",
				"55-9" => "豆汁排骨飯",
				"55-10" => "雞排飯",
				"55-12" => "酥脆雞翅飯",
				"55-13" => "三杯雞飯",
				"60-1" => "腿排飯",
				"60-2" => "肉魚飯",
				"60-3" => "魚肚飯",
				"60-4" => "白帶魚飯",
				"60-5" => "秋刀魚飯",
				"60-6" => "招牌排骨飯",
				"60-8" => "爌肉飯",
				"60-9" => "豬腳飯",
				"60-10" => "雞腿飯（小）",
				"60-11" => "咔啦雞腿飯",
				"60-12" => "雞塊飯",
				"70-1" => "魚排飯",
				"75-1" => "雞腿飯（大）",
				"1" => "吳郭魚飯",
				"2" => "金線魚飯",
			);
			$price = mb_substr($four[$i] , 0 , 2 ,'utf8');
			$t = $four[$i];
			if ($t == "1" || $t == "2") {
				$price = "時價";
				$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name[$t]', '$price', '$day', '$no')";
				if (mysqli_query($conn, $sql)) {
					echo "<script type='text/javascript'>";
					echo "window.location.href='/order/order3.php'";
					echo "</script>";
				} else {
					echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
				}
			} else {
				$sql = "INSERT INTO week3 (user, name, price, day, userid) VALUES ('$user', '$name[$t]', '$price', '$day', '$no')";
				if (mysqli_query($conn, $sql)) {
					echo "<script type='text/javascript'>";
					echo "window.location.href='/order/order3.php'";
					echo "</script>";
				} else {
					echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
				}
			}
		}
	}
}

//Foot
echo "<script type='text/javascript'>";
echo "window.location.href='/order/order3.php'";
echo "</script>";
mysqli_close($conn);
?>
</body>
</html>