<?php
include "db_config.php";

print_r($_SESSION);

$birim = $con->query("SELECT country_name FROM `countries` where id='$_SESSION[countryId]'");
while($birim = mysqli_fetch_assoc($birim)){
    $brm=$birim['country_name'];
}


$islem = $con->query("SELECT state_name FROM `states` where id='$_SESSION[stateId]'");
while($islem = mysqli_fetch_assoc($islem)){
    $islm=$islem['state_name'];
}


$altislem = $con->query("SELECT city_name FROM `cities` where id='$_SESSION[cityId]'");
while($altislem = mysqli_fetch_assoc($altislem)){
    $altislm=$altislem['city_name'];
    // print_r($altislem['city_name']);
}


$_SESSION['tc']=$_POST['tc'];
$_SESSION['adsoyad']=$_POST['adsoyad'];
$_SESSION['mersis']=$_POST['mersis'];
$_SESSION['unvan']=$_POST['unvan'];
$_SESSION['telno']=$_POST['telno'];
$_SESSION['mail']=$_POST['mail'];

$saat=$_SESSION['saat'];
echo $saat;

$tc=$_SESSION['tc'];
$adsoyad= $_SESSION['adsoyad'];
$mersis=$_SESSION['mersis'];
$unvan=$_SESSION['unvan'];
$telno=$_SESSION['telno'];
$mail=$_SESSION['mail'];

$save=mysqli_query($con,"INSERT INTO save_selects_data (birim,islem,altislem,saat,tc,adsoyad,mersis,unvan,telno,mail)
 VALUES  ('$brm','$islm','$altislm','$saat','$tc','$adsoyad','$mersis','$unvan','$telno','$mail')") or die("Hata:".mysqli_connect_error());

header( "Location:http://www.sivastso.org.tr/")
?>
