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
$dayNum = $_POST['dayNum'];
$day = $_POST['day'];
$week = $_POST['week'];
$class = $_POST['class'];

if ($dayNum == "2")
{
	$two = $_POST['two'];
	for ($i=0; $i<=9; $i++) {
		if ($two[$i] != "") {
			$name = mb_substr($two[$i] , 0 , -4 ,'utf8');
			$price = mb_substr($two[$i] , -3 , 2 ,'utf8');			
			$sql = "INSERT INTO week$week (user, name, price, day, userid, class) VALUES ('$user', '$name', '$price', '$dayNum' , '$no', '$class')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order$week.php#$day'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($dayNum == "4")
{
	$four = $_POST['four'];
	for ($i=0; $i<=9; $i++) {
		if ($four[$i] != "") {
			$name = mb_substr($four[$i] , 0 , -4 ,'utf8');
			$price = mb_substr($four[$i] , -3 , 2 ,'utf8');			
			$sql = "INSERT INTO week$week (user, name, price, day, userid, class) VALUES ('$user', '$name', '$price', '$dayNum' , '$no', '$class')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order$week.php#$day'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($dayNum == "1")
{
	$one = $_POST['one'];	
	for ($i=0; $i<=9; $i++) {
		if ($one[$i] != "") {
			$name = array(
				"55-1" => "蝦仁排飯",
				"55-2" => "咖哩雞飯",
				"55-3" => "鹹魚飯",
				"55-4" => "糖醋魚飯",
				"55-5" => "軟骨魚飯",
				"55-6" => "蔥爆豬肉飯",
				"55-7" => "黑胡椒排骨飯",
				"55-8" => "豆汁排骨飯",
				"60-1" => "腿排飯",
				"60-2" => "肉魚飯",
				"60-3" => "魚肚飯",
				"60-4" => "招牌排骨飯",
				"60-5" => "蒜泥白肉飯",
				"60-6" => "爌肉飯",
				"60-7" => "豬腳飯",
				"60-8" => "雞腿飯（小）",
				"60-9" => "咔啦雞腿飯",
				"60-10" => "雞塊飯",
				"60-11" => "雞排飯",
				"60-12" => "酥脆雞翅飯",
				"60-13" => "三杯雞飯",
				"65-1" => "白帶魚飯",
				"65-2" => "浦燒魚飯",
				"70-1" => "吳郭魚飯",
				"75-1" => "雞腿飯（大）",
			);
			$price = mb_substr($one[$i] , 0 , 2 ,'utf8');
			$t = $one[$i];
			$sql = "INSERT INTO week$week (user, name, price, day, userid, class) VALUES ('$user', '$name[$t]', '$price', '$dayNum', '$no', '$class')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order$week.php#$day'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($dayNum == "3")
{
	$three = $_POST['three'];	
	for ($i=0; $i<=9; $i++) {
		if ($three[$i] != "") {
			$name = array(
				"55-1" => "蝦仁排飯",
				"55-2" => "咖哩雞飯",
				"55-3" => "鹹魚飯",
				"55-4" => "糖醋魚飯",
				"55-5" => "軟骨魚飯",
				"55-6" => "蔥爆豬肉飯",
				"55-7" => "黑胡椒排骨飯",
				"55-8" => "豆汁排骨飯",
				"60-1" => "腿排飯",
				"60-2" => "肉魚飯",
				"60-3" => "魚肚飯",
				"60-4" => "招牌排骨飯",
				"60-5" => "蒜泥白肉飯",
				"60-6" => "爌肉飯",
				"60-7" => "豬腳飯",
				"60-8" => "雞腿飯（小）",
				"60-9" => "咔啦雞腿飯",
				"60-10" => "雞塊飯",
				"60-11" => "雞排飯",
				"60-12" => "酥脆雞翅飯",
				"60-13" => "三杯雞飯",
				"65-1" => "白帶魚飯",
				"65-2" => "浦燒魚飯",
				"70-1" => "吳郭魚飯",
				"75-1" => "雞腿飯（大）",
			);
			$price = mb_substr($three[$i] , 0 , 2 ,'utf8');
			$t = $three[$i];
			$sql = "INSERT INTO week$week (user, name, price, day, userid, class) VALUES ('$user', '$name[$t]', '$price', '$dayNum', '$no', '$class')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order$week.php#$day'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}
if ($dayNum == "5")
{
	$five = $_POST['five'];	
	for ($i=0; $i<=9; $i++) {
		if ($five[$i] != "") {
			$name = array(
				"55-1" => "蝦仁排飯",
				"55-2" => "咖哩雞飯",
				"55-3" => "鹹魚飯",
				"55-4" => "糖醋魚飯",
				"55-5" => "軟骨魚飯",
				"55-6" => "蔥爆豬肉飯",
				"55-7" => "黑胡椒排骨飯",
				"55-8" => "豆汁排骨飯",
				"60-1" => "腿排飯",
				"60-2" => "肉魚飯",
				"60-3" => "魚肚飯",
				"60-4" => "招牌排骨飯",
				"60-5" => "蒜泥白肉飯",
				"60-6" => "爌肉飯",
				"60-7" => "豬腳飯",
				"60-8" => "雞腿飯（小）",
				"60-9" => "咔啦雞腿飯",
				"60-10" => "雞塊飯",
				"60-11" => "雞排飯",
				"60-12" => "酥脆雞翅飯",
				"60-13" => "三杯雞飯",
				"65-1" => "白帶魚飯",
				"65-2" => "浦燒魚飯",
				"70-1" => "吳郭魚飯",
				"75-1" => "雞腿飯（大）",
			);
			$price = mb_substr($five[$i] , 0 , 2 ,'utf8');
			$t = $five[$i];
			$sql = "INSERT INTO week$week (user, name, price, day, userid, class) VALUES ('$user', '$name[$t]', '$price', '$dayNum', '$no', '$class')";
			if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'>";
				echo "window.location.href='/order/order$week.php#$day'";
				echo "</script>";
			} else {
				echo "錯誤: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	}
}

//Foot
echo "<script type='text/javascript'>";
echo "window.location.href='/order/order$week.php'";
echo "</script>";
mysqli_close($conn);
?>
</body>
</html>