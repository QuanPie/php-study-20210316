<?php
include("header.php");
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

?>
