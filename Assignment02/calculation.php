<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculation</title>
</head>
<body>
<?php
$capital = $_POST["value"];
$interestRate = 1.5;

echo "If you invest $capital. You will have in one year: <b>$capital.--</b>";
echo "<br/><br/>";
$return = $capital * $interestRate / 100;
echo "You will get in the first year the following return: <b>$return.--</b> !";
echo "<br/><br/>";
$capital = $capital * pow((1 + $interestRate / 100), 10);
$capital = round($capital);
echo "In 10 years you will have: <b>$capital.--</b> !";
?>
</body>
</html>
