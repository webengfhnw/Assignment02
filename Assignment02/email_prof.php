<html>
  <head>
    <title> E-Mail-Adressen-Test </title>
  </head>
  <body>

<?PHP

// Diese Funktion gefunden im Netz unter
// http://www.hoerandl.com/code-schnipsel/php-codes/allgemein/item/e-mail-adresse-auf-gueltigkeit-ueberpruefen 
function checkmail($email)
{
if (!preg_match( '/^([a-z0-9]+([-_\.]?[a-z0-9])+)@[a-z0-9äöü]+([-_\.]?[a-z0-9äöü])+\.[a-z]{2,4}$/i', $email))
{$i="0";}
else 
{$i="1";}
return $i;
}

$mailadr=$_POST["wert"];

$mail=checkmail($mailadr);

if ($mail==1)
{
echo "Vielen Dank für Ihre E-Mail-Adresse.<br/>";
echo "Wir werden Sie in unser SPAM-Programm aufnehmen!";
}
else
{
echo "Bitte geben Sie ein korrekte E-Mail-Adresse ein!!";
}
?>	
  </body>
</html>
