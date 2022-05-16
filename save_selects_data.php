<?php
include "db_config.php";

// $birim=$_POST['birim'];


// print_r($_POST);
$tc=$_POST["tc"];
$adsoyad=$_POST["adsoyad"];
$mersis=$_POST["mersis"];
$unvan=$_POST["unvan"];
$telno=$_POST["telno"];
$mail=$_POST["mail"];


// $personel= $_SESSION['personel'];
// $query="INSERT INTO `save_selects_data`(`birim`, `islem`, `altislem`,`personel`) 
// VALUES ('.$birim.','.$islem.','.$altislem.','$personel')";

// $adding=mysqli_query($con,$query);

// if($adding){
//     echo "succes";
//     header("Location:saat.php");
// }else{
//     echo "fail";
// }


// ,`tc`, `adsoyad`, `mersis`, `unvan`, `telno`, `mail`
// ,'$personel','$tc','$adsoyad','$mersis','$unvan','$telno','$mail'
$addusersinfo=mysqli_query($con,"INSERT INTO save_selects_data ('adsoyad') 
values ('.$adsoyad.' )") or
 die("Hata:".mysqli_connect_error());


//         if(isset($_POST["tc"], $_POST["adsoyad"],$_POST["mersis"],$_POST["unvan"],$_POST["telno"],$_POST["mail"])){
//             $tc=$_POST["tc"];
//             $adsoyad=$_POST["adsoyad"];
//             $mersis=$_POST["mersis"];
//             $unvan=$_POST["unvan"];
//             $telno=$_POST["telno"];
//             $mail=$_POST["mail"];

// $birim= $_SESSION['countryId'];
// $islem= $_SESSION['stateId'] ;
// $altislem= $_SESSION['cityId'] ;
// $personel= $_SESSION['personel'];
           
        // }
?>

$birim = $con->query("SELECT country_name FROM `countries` where id='$_SESSION[countryId]'");