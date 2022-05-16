<?php
include "db_config.php";
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
    <meta name="author" content="İsmail ÇAKIR - ismailua@gmail.com">
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"> -->
    <link rel="stylesheet" href="line-awesome.min.css">
    <script src="multi.js"></script>
    <link href="custom.css" rel="stylesheet">
    <link href="multiform.css" rel="stylesheet">
    <link rel="stylesheet" href="saatler.css">
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
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <meta name="theme-color" content="#ffffff">
    <title>Document</title>
   
 
</head>
<body>
<div class="wrapper"> 
  <!--Header Start-->

<link href="randevu.css" rel="stylesheet" type="text/css"/>
<link href="randevu_style.css" rel="stylesheet" type="text/css"/>

<!--Subheader Start-->
<section class="wf100 subheader">
	<div class="container">
	   <h2>Randevu Oluştur </h2>
	   <ul>
		  <li> <a href="index">Anasayfa</a> </li>
		  <li> <a href="index">Odamız</a> </li>
		  <li> Randevu Oluştur </li>
	   </ul>
	</div>
 </section>
 <!--Subheader End--> 
 <div class="main-content">
	<div class="map-form p40">
	   <div class="container">
		<center> 
            <h5>
		<!-- <?php
            //   "SELECT countries.country_name, save_selects_data.birim FROM country INNER JOIN save_selects_data ON country.country_name = save_selects_data.birim";
            // $get_data="SELECT birim FROM save_selects_data";
            // $result=$con->query($get_data);
            // if($result->num_rows>0){
            // $row=$result->fetch_object();
            // echo "". $row->birim . "";
            // }
		?>
		</h5>
            <h6>
            <?php
            // $get_data="SELECT islem,altislem FROM save_selects_data";
            // $result=$con->query($get_data);
            // if($result->num_rows>0){
            // $row=$result->fetch_object();
            // echo "". $row->islem . "  ,   ". $row->altislem ."";
            // }
		?> -->
            </h6>
            <hr>
            <h5 style="margin-bottom: 5px;font-weight: 600;font-size: 20px;">
            <?php 
            // print_r($_SESSION);
               $get_data="SELECT * FROM countries WHERE id = '".$_SESSION['countryId']."' ";
               $result=$con->query($get_data);
               if($result->num_rows>0){
               $row=$result->fetch_object();
               echo "". $row->country_name . "";
             }
             ?>
             </h5>
             <h6 style="margin-bottom: 5px;font-size: 15px; font-weight: 600;">
             <?php
               $get_datas="SELECT * FROM states WHERE id = '".$_SESSION['stateId']."' ";
               $results=$con->query($get_datas);
               if($results->num_rows>0){
               $rows=$results->fetch_object();
               echo "". $rows->state_name . "";
               }
            ?>
            </h6>
            <?php
               $get_datass="SELECT * FROM cities WHERE id = '".$_SESSION['cityId']."' ";
               $resultss=$con->query($get_datass);
               if($resultss->num_rows>0){
               $rowss=$resultss->fetch_object();
               echo "". $rowss->city_name . "";
               }
            ?>
            <hr>
            <i class="fas fa-clock"></i>
            <?php
               $get_datass="SELECT id,süre FROM `cities` where id='$_SESSION[cityId]'";
               $resultss=$con->query($get_datass);
               if($resultss->num_rows>0){
               $rowss=$resultss->fetch_object();
               echo "Bu işlem için gereken tahmini süre <strong>". $rowss->süre . "</strong> dakikadır.";
               }
            ?>

            <hr>
            <h7>Lütfen size uygun saat aralığını seçiniz</h7><hr>
            </center>
<?php 
      //Tarih fonksiyonu
      $now = time();
      $day = 60*60*24;
      $days = array();
      for ($i=0; $i<=7; $i++){  
            $ts = $now + $day*$i; 
            if (date("N", $ts) < 7){
                  $days[] = date("d.m.Y", $ts);
            }
      }
?>
<?php



print_r($_SESSION);
// Önceki sayfada girilen bilgiler session'a kaydedilmişti. kaydedilen city_name bilgisini 
//ve sahip olduğu süre bilgisi veritabanından çekildi. $time isimli dizi içine atılıp $dk değişkenine atandı. 
$süre = $con->query("SELECT id,süre FROM `cities` where id='$_SESSION[cityId]'");
while($time = mysqli_fetch_assoc($süre)){

print_r($time['süre']);
$dk= $time['süre'];
}

if($dk ==15){
      //$dilim = array('08:00','08:15','08:30','08:45','09:00','09:15','09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45');
      $dilim = array('10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45');
}else if($dk ==30){
      //$dilim = array('08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30');	
      $dilim = array('10:00','10:30','11:00','11:30','13:00','13:30','14:00','14:30','15:00','15:30');	
}else if($dk ==45){
      //$dilim = array('08:00','08:45','09:30','10:15','11:00','13:00','13:45','14:30','15:15','16:00');
      $dilim = array('10:00','10:45','11:30','13:00','13:45','14:30','15:15','16.00');
      
}else if($dk ==60){
      //$dilim = array('08:00','09:00','10:00','11:00','13:00','14:00','15:00','16:00');	
      $dilim = array('10:00','11:00','13:00','14:00','15:00','16.00');	
}
?>

<table>
      <tr id="tablotr" style="height: 45px;font-weight: 500;">
            <!-- haftanın günlerinin bastırılması ve haftasonu kontrolü -->
            <?php  for ($i=0; $i<=6; $i++){  $ts = $now + $day*$i; if (date("N", $ts) < 6){  ?>
            <td class="saat"><?php echo  date("d.m.Y", $ts);  ?> </td>
            <?php } } ?>
      </tr>
      <!-- usersinfo.php  action içine-->
<form action="usersinfo.php" method="POST" >
      <table >
            <tbody>
      <?php foreach($dilim as $dil){ ?>  
         <table style="width: 100%;" >
         
<!-- 1.SÜTUN -->       
            <td  style="width: 21%;height: 40px;font-size: 15px;font-weight: 500; " >
            <!--.$days[0]  -->
            <label for="" style="border:1px solid gray;margin-top:5px; padding:10px;border-radius: 5px; width: 50%;font-weight: 500;">
                  <input  style="margin-right: 10px;cursor:pointer" type="radio" required
                  name="saat[]" value="<?php echo $dil.' '. $days[0]; ?>"><?php echo $dil.' ' ?>
            </label>
            </td>  
<!-- 2.SÜTUN -->             
            <td  style="width: 20%;height: 40px;font-size: 15px;font-weight: 500;">
            <!-- .$days[1] -->
                  <label for="" style="border:1px solid gray;margin-top:5px; padding:10px;border-radius: 5px; width: 50%;font-weight: 500;">
                        <input style="margin-right: 10px;cursor:pointer" type="radio" required
                        name="saat[]" value="<?php echo $dil.' '. $days[1]; ?>"><?php echo $dil.' '?>
                  </label>
            </td>
<!-- 3.SÜTUN -->           
            <td style="width: 19%;height: 40px;font-size: 15px;font-weight: 500;">
            <!-- .$days[2] -->
                  <label for="" style="border:1px solid gray;margin-top:5px; padding:10px;border-radius: 5px; width: 50%;font-weight: 500;">
                        <input style="margin-right: 10px;cursor:pointer" type="radio" required
                        name="saat[]" value="<?php echo $dil.' '. $days[2]; ?>"><?php echo $dil.' '?>
                  </label>
            </td>
<!-- 4.SÜTUN -->            
            <td style="width: 214px;height: 40px;font-size: 15px;font-weight: 500;">
            <!-- .$days[3] -->
                  <label for="" style="border:1px solid gray;margin-top:5px; padding:10px;border-radius: 5px; width: 50%;font-weight: 500;">
                        <input style="margin-right: 10px;cursor:pointer" type="radio" required
                        name="saat[]" value="<?php echo $dil.' '. $days[3]; ?>"> <?php echo $dil.' '?>
                  </label>
            </td>
<!-- 5.SÜTUN -->
            <td  style="width: 214px;height: 40px;font-size: 15px;" >
            <!-- .$days[5] -->
                  <label for="" style="border:1px solid gray;margin-top:5px; padding:10px;border-radius: 5px; width: 50%;font-weight: 500;" >
                        <input style="margin-right: 10px;cursor:pointer" type="radio" required
                        name="saat[]" value="<?php echo $dil.' '. $days[5]; ?>"><?php echo $dil.' '?>
                  </label>
            </td>
         </table>
         
      <?php } ?>
     
      </tbody>
      <?php
     
      ?>
      <a href="usersinfo.php"><button class="next-btn" type="submit">İleri</button></a>
      <a href="x.php"  class="hoverr"><button type="submit"  class="prev-btn" onclick="history.back()" >Geri </button></a>
</table>
</form>

</table>

           
</div>
	   </div>
	</div>
  
</div>


 