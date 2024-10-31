<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

    <h1>Discriminant of a Quadratic Equation</h1>

	<form action="index.php">
		<p>A <input type="text" placeholder="Value of A here" name="num1"></p>
		<p>B <input type="text" placeholder="Value of B here" name="num2"></p>
        <p>C <input type="text" placeholder="Value of C here" name="num3"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>

</body>
</html>

<?php if(isset($_GET["submitBtn"])) {

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$quadratic_equation = $num2 * $num2 - 4 * $num1 * $num3;
echo "<h2>The answer is "  . $quadratic_equation . "</h2>";
} ?>