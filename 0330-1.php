<html>
<head></head>

<body>
	<?php include("header.php"); ?>
	<center>
		<h2>BMI 線上計算服務</h2>

		<form action="0330-1.php" method="post">

			Height: <input type="text" name="height">m<br>
			Body weight: <input type="text" name="weight">kg<br>
			<input type="submit">
		</form>	

		<span>
			<?php
			if ($_POST) {	
				$h = $_POST["height"];
				$w = $_POST["weight"];
				$BMI = $w/$h**2;
				echo "height:".$h."m<br>";
				echo "weight".$w."kg<br>";
				echo "BMI:".number_format($BMI,2)."<br>";

				if ($BMI < 18.5) {
					echo "太輕<br>";
				}
				else if ($BMI > 24) {
					echo "胖子<br>";
				}
			}
			?>
			
		</span>
	</center>
</body>
</html>

