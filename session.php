<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
</head>

<body>
<?php
session_start();
unset($_SESSION['user']);
session_destroy();
echo "<script type='text/javascript'>";
echo "setTimeout(\"location.href='/'\",0)";
echo "</script>";
?>
</body>
</html>