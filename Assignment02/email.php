<html>
<head>
    <title> E-Mail-Address-Test </title>
</head>
<body>

<?PHP
$mailAddress = $_POST["value"];
$length = strlen($mailAddress) - 1;
$mail = 0;
for ($i = 0; $i <= $length; $i++) {
    $element = substr($mailAddress, $i, 1);
    if ($element == "@") {
        $mail = $mail + 1;
    }
}
if ($mail == 1) {
    echo "You email address is valid.<br/>";
} else {
    echo "Please enter a valid email address!";
}
?>
</body>
</html>
