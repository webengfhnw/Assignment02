<html>
<head>
    <title>Currency calculator</title>
</head>
<body>
<?PHP
function computation($value, $multiplier, $currency)
{
    $result = $value / $multiplier;
    $result = round($result, 2);
    echo "<font color=\"red\" FACE=\"arial\" SIZE=\"3\">";
    echo $value . " Swiss francs is: " . $result . $currency . " <br/><br/>";
    echo "</font>";
}

// Faktoren von aktuellen Kursen umrechnen!
$multiplier_d = 0.91;
$multiplier_e = 1.21;
$multiplier_y = 0.0117;
$country = 0;

if (isset($_POST['value'])) {
    $value = $_POST["value"];
    $country = $_POST["currency"];
}


if ($country == "1") {
    $currency = " Dollar";
    computation($value, $multiplier_d, $currency);
}
if ($country == "2") {
    $currency = " Euro";
    computation($value, $multiplier_e, $currency);
}
if ($country == "3") {
    $currency = " Yen";
    computation($value, $multiplier_y, $currency);
}
?>
<br/>
Please enter an amount in Swiss francs:
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method=post>
    Value/Amount
    <INPUT type=text name="value" size="30">
    <br/><br/>
    Please select a currency:
    <SELECT name="currency">
        <OPTION value="1">Dollar
        <OPTION value="2">Euro
        <OPTION value="3">Yen
    </SELECT><br/><br/>
    <INPUT type="submit" value="Send!">
    <INPUT type="reset" value="Reset">
</form>
</body>
</html>