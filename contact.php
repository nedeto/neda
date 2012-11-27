<?php
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
$to='maia82@abv.bg';
$name=$_POST["name"];
$message = $_POST["message"];
$email=$_POST["email"];
$headers = 'From: '.$_POST["email"].'';
$mailsent = mail($to, $message, $headers);
 
if($mailsent){
	echo "Благодарим Ви. Съобщението е изпратено успешно!<br><br>";
	echo "<b> To:</b> $to <br>";
	echo "<b>Name: </b> $name <br>";
	echo "<b> From:</b> $email <br>";
	echo "<b> Message:</b> $message <br>";
}
else{
	echo " Възникна грешка, моля опитайте отново!";
}
?>