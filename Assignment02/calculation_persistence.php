<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculation</title>
</head>
<body>
<?php
$capital = $_POST["value"];
$startingCapital = $_POST["value"];
$interestRate = 1.5;

echo "If you invest $capital. You will have in one year: <b>$capital.--</b>";
echo "<br/><br/>";
$return = $capital * $interestRate / 100;
echo "You will get in the first year the following return: <b>$return.--</b> !";
echo "<br/><br/>";
$capital = $capital * pow((1 + $interestRate / 100), 10);
$capital = round($capital);
echo "In 10 years you will have: <b>$capital.--</b> !";
// persistence
if (!$fileHandler = fopen("logging.txt", "a")) {
    echo "Error";
    exit;

} else {
    flock($fileHandler, LOCK_EX); // exclusive reading
    $out = "Starting capital: " . $startingCapital . "   Final capital: " . $capital;
    fwrite($fileHandler, $out);  // write the result to file
    $timestamp = " Timestamp: " . date("d.M.y") . " " . date("H:i:s");
    fwrite($fileHandler, $timestamp); // Timestamp
    fwrite($fileHandler, "\r\n"); // line break
    flock($fileHandler, LOCK_UN);   // unlock the file
    fclose($fileHandler);  // close the file
    echo "<br/><br/>";
    echo "The result of the interest calculation has been persisted to \"logging.txt\"!";
}
?>
<br><br>
<a href="calculation_form_persistence.html">New calculation</a>
</body>
</html>
