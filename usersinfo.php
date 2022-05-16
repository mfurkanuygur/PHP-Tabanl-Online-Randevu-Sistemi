<?php
include "db_config.php"
?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sivas TSO - 120.Yıl</title>
    <meta name="description" content="1901 yılında Sivas Ticaret Ziraat ve Sanayi Odası adı ile kurulmuş, 1908 yılında Ziraat Odasından ayrılarak Sivas Ticaret ve Sanayi Odası adını almıştır.">
    <meta name="keywords" content="Sivas ticaret sanayi odası, sivas oda, sivas tso, tso sivas, mustafa eken, stso, sivastso, güçlü temsil, yenilikçi hizmet">
    <meta name="author" content="mfu">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> -->
    <link rel="stylesheet" href="line-awesome.min.css">
    <script src="multi.js"></script>
    <link href="custom.css" rel="stylesheet">
    <link href="multiform.css" rel="stylesheet">
    <link rel="stylesheet" href="usersinfo.css">
    <link href="responsive.css" rel="stylesheet">
    <link href="color.css" rel="stylesheet">
    <link href="all.css" rel="stylesheet">
    <link href="owl.carousel.min.css" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="prettyPhoto.css" rel="stylesheet">
    <link href="slick.css" rel="stylesheet">
    <link href="magnific-popup.css" rel="stylesheet">
    <link href="popup.css" rel="stylesheet">
    <link href="text.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/images/favicon/ico_32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/images/favicon/ico_16x16.png" sizes="16x16" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>
</head>
<body style="background-color:white">
<div class="wrapper" style="width: 100%;"> 
  <!--Header Start-->

<link href="randevu.css" rel="stylesheet" type="text/css"/>
<link href="randevu_style.css" rel="stylesheet" type="text/css"/>

<!--Subheader Start-->
<section class="wf100 subheader" style="margin-bottom: 35px;">
	<div class="container">
	   <h2>Randevu Oluştur </h2>
	   <ul>
		  <li> <a href="index">Anasayfa</a> </li>
		  <li> <a href="index">Odamız</a> </li>
		  <li> Randevu Oluştur </li>
	   </ul>
	</div>
</section>
<div class="container">
    <form action="savedata.php" method="POST">
        <div class="row">
            <div class="col-md-6" > 
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >T.C Numaranız:</label>
                <input  type="text" name="tc" minlength="11" maxlength="11" 
                onkeypress='return event.keyCode >= 48 && event.keyCode <= 57' 
                 required placeholder="T.C Kimlik Numaranızı Giriniz">
            </div>
            <div class="col-md-6" >
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >Ad Soyad:</label><br>
                <input type="text" name="adsoyad" minlength="2" maxlength="25" 
                onkeypress="return (event.charCode > 64 && event.charCode < 91) || 
                (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                required 
                placeholder="Adınızı ve Soyadınızı Giriniz">
            </div>
            <div class="col-md-6" >
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >Mersis Talep No:</label><br>
                <input type="text" name="mersis" minlength="16" maxlength="16" 
                onkeypress='return event.keyCode >= 48 && event.keyCode <= 57'
                required placeholder="Mersis Talep No Giriniz">
            </div>
            <div class="col-md-6" >
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >Firmanızın Unvanı:</label><br>
                <input type="text" name="unvan" maxlength="40"
                onkeypress="return (event.charCode > 64 && event.charCode < 91) || 
                (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)"
                required placeholder="Firmanızın Unvanını Giriniz">
            </div>
            <div class="col-md-6">
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >Telefon No:</label><br>
                <input type="text" name="telno" 
                onkeypress='return event.keyCode >= 48 && event.keyCode <= 57'
                required minlength="11" maxlength="11" placeholder="05xx4567890">
               
            </div>
            <div class="col-md-6">
                <label for=""><font color="f30404" >*</font></label>
                <label class="labels" for="" >E-mail</label><br>
                <input type="email" name="mail" maxlength="30"
                required placeholder="E-mail Adresinizi Giriniz">
            </div><br><br>
            <div class="col-md-12">
                <small style="font-size:90%; float:right;" class="ml-1">
                    <input type="checkbox" name="kvk" required=""> KVKK Aydınlatma Metnini 
                    <a href="" data-toggle="modal" data-target="#myModal">Okudum</a>, Kabul Ediyorum</small>
            </div>
        </div>
        <br>
        <?php
        $_SESSION['saat']=$_POST['saat'][0];
       
       
        print_r($_SESSION);


        
        ?>
        <a href="saat.php"><button class="prev-btn" onclick="history.back()" >Geri</button></a>
        <a href="savedata.php"><button class="next-btn" >Randevu Oluştur</button></a>
    </form>

    <!-- <?php
        // if(isset($_POST["tc"], $_POST["adsoyad"],$_POST["mersis"],$_POST["unvan"],$_POST["telno"],$_POST["mail"])){
        //     $tc=$_POST["tc"];
        //     $adsoyad=$_POST["adsoyad"];
        //     $mersis=$_POST["mersis"];
        //     $unvan=$_POST["unvan"];
        //     $telno=$_POST["telno"];
        //     $mail=$_POST["mail"];

        //     $addusersinfo=mysqli_query($con,"INSERT INTO save_selects_data (`tc`, `adsoyad`, `mersis`, `unvan`, `telno`, `mail`) 
        //     values ('$tc','$adsoyad','$mersis','$unvan','$telno','$mail')") or die("Hata:".mysqli_connect_error());
        // }
?> -->
</div>
 </div>
 
 </body>
 </html>