<?php if(isset($_GET["submitBtn"])) {

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$quadratic_equation = $num2 * $num2 - 4 * $num1 * $num3;
echo "<h2>The answer is "  . $quadratic_equation . "</h2>";
} ?>