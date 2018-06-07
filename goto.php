<html>	
<head>
<title>資訊科暑輔午餐登記</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="/js/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
session_start();
include("mysql_connect.inc.php");
//$name = $_POST['name'];
$no = $_POST['no'];
$result = mysql_query("SELECT * FROM user WHERE no='$no'");
$row = @mysql_fetch_row($result);
if ( $no=="" )
{
	echo ("<h1>學號錯誤QQ</h1>");
	echo "<script type='text/javascript'>";
	echo "setTimeout(\"location.href='/'\",3000)";
	echo "</script>";
}
else
{
	if ( $no == "411112" ) {
		echo "<script type='text/javascript'>";
		echo "window.location.href='/order/item1.php'";
		echo "</script>";
	}
	if ( $no == $row["2"] )
	{
		$_SESSION["no"]=$no;
		$_SESSION["user"]=$row["1"];
		$_SESSION["class"]=$row["3"];
		echo "<script type='text/javascript'>";
		echo "window.location.href='/order/order1.php'";
		echo "</script>";
	}
	else
	{
		echo ("<h1>學號錯誤QQ</h1>");
		echo "<script type='text/javascript'>";
		echo "setTimeout(\"location.href='/'\",3000)";
		echo "</script>";
	}
}
?>
</body>
</html>