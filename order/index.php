<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>資二甲暑輔午餐登記</title>

    <style>
body {
	margin: 0;
	overflow: hidden;
	}
	#myCanvas {
		display: block;
	}
	#button1 {
		font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
		position: absolute;
		font-size: 4em;
		text-transform: uppercase;
		padding: 7px 20px;
		left: 40%;
		width: 400px;
		margin-left: -100px;
		top: 20%;
		border-radius: 10px;
		color: white;
		text-shadow: -1px -1px 1px rgba(0,0,0,0.8);
		border: 5px solid transparent;
		border-bottom-color: rgba(0,0,0,0.35);
		background: hsla(260, 100%, 50%, 1);
		cursor: pointer;

		animation: pulse 1s infinite alternate;
		transition: background 0.4s, border 0.2s, margin 0.2s;
	}
	#button2 {
		font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
		position: absolute;
		font-size: 4em;
		text-transform: uppercase;
		padding: 7px 20px;
		left: 40%;
		width: 400px;
		margin-left: -100px;
		top: 40%;
		border-radius: 10px;
		color: white;
		text-shadow: -1px -1px 1px rgba(0,0,0,0.8);
		border: 5px solid transparent;
		border-bottom-color: rgba(0,0,0,0.35);
		background: hsla(260, 100%, 50%, 1);
		cursor: pointer;

		animation: pulse 1s infinite alternate;
		transition: background 0.4s, border 0.2s, margin 0.2s;
	}
	#button3 {
		font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
		position: absolute;
		font-size: 4em;
		text-transform: uppercase;
		padding: 7px 20px;
		left: 40%;
		width: 400px;
		margin-left: -100px;
		top: 60%;
		border-radius: 10px;
		color: white;
		text-shadow: -1px -1px 1px rgba(0,0,0,0.8);
		border: 5px solid transparent;
		border-bottom-color: rgba(0,0,0,0.35);
		background: hsla(260, 100%, 50%, 1);
		cursor: pointer;

		animation: pulse 1s infinite alternate;
		transition: background 0.4s, border 0.2s, margin 0.2s;
	}
	#button4 {
		font-family: "Gill Sans", "Gill Sans MT", Calibri, sans-serif;
		position: absolute;
		font-size: 4em;
		text-transform: uppercase;
		padding: 7px 20px;
		left: 40%;
		width: 400px;
		margin-left: -100px;
		top: 80%;
		border-radius: 10px;
		color: white;
		text-shadow: -1px -1px 1px rgba(0,0,0,0.8);
		border: 5px solid transparent;
		border-bottom-color: rgba(0,0,0,0.35);
		background: hsla(260, 100%, 50%, 1);
		cursor: pointer;

		animation: pulse 1s infinite alternate;
		transition: background 0.4s, border 0.2s, margin 0.2s;
	}

	#button:hover {
		background: hsla(220, 100%, 60%, 1);
		margin-top: -1px;

		animation: none;
	}
	#button:active {
		border-bottom-width: 0;
		margin-top: 5px;
	}
	@keyframes pulse {
		0% {
			margin-top: 0px;
		}
		100% {
			margin-top: 6px; 
		} 
	}
</style>

  <script src="js/prefixfree.min.js"></script>

</head>

<body>
<div id="button">
	<button id="button1" onclick="location.href='/order/week1.php';">第一週</button>
	<button id="button2" onclick="location.href='/order/week2.php';">第二週</button>
    <button id="button3" onclick="location.href='/order/week3.php';">第三週</button>
    <button id="button4" onclick="location.href='/order/week4.php';">第四週</button>
</div>
<canvas id="myCanvas" width="300" height="300"></canvas>
  <script src="js/index.js"></script>

</body>

</html>