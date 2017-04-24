<?php
$db_adres="localhost";
$db_user="root";
$db_pass="";
$db_tablo="bilgisayarkocaeli";

$conn = mysqli_connect($db_adres,$db_user,$db_pass,$db_tablo);


if(!$conn)
{
	die("Bağlantı Hatasi".mysqli_error());
	}

$db_select=mysqli_select_db($conn,$db_tablo);

if(!$db_select)
{
	die("Bağlantı Hatasi select".mysqli_error());
	}
mysqli_query($conn,"SET NAMES UTF8");

//error_reporting(E_ALL ^ E_DEPRECATED);



?>
