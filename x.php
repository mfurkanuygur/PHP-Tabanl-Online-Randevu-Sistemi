<?php include "db_config.php"
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

    <!-- ////////////////////// -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
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
		  <div class="row">

			 <div class="col-md-6 col-sm-7">
				<div class="map">
					<div class="randtext">Değerli üye ve ziyaretçilerimiz; <br /> Sivas Ticaret ve Sanayi Odası olarak sizlere verdiğimiz hizmetler ile ilgili randevularınızı hemen oluşturabilir, sıra beklemeden işlem yapabilirsiniz.<br /> Lütfen sağ taraftan ilgili birim, hizmet ve personel seçimi yaparak devam ediniz.</div>
				   <ul class="counter">
					 <li class="col-md-4 col-sm-4 p6">
						<div class="fact-box"> <i class="fas fa-user-clock"></i> <strong>650</strong> <span>Toplam</span> </div>
					 </li>
					 <li class="col-md-4 col-sm-4 p6">
						<div class="fact-box"> <i class="fas fa-user-clock"></i> <strong>0</strong> <span>Bugün</span> </div>
					 </li>
					 <li class="col-md-4 col-sm-4 p6">
						<div class="fact-box"> <i class="fas fa-user-clock"></i> <strong>132</strong> <span>Bu Hafta</span> </div>
					 </li>
					</ul>
				</div>
			 </div>
<!--************************************************************************************-->

			 <div class="col-md-6 col-sm-5">
         <section class="sectionone">
            <div class="multicontainer">
              <form  action="saat.php" name="form1" id="form1" method="POST"  >
                <div class="step step-1 active ">
                  <div class="form-group">
                    <label for="country">Birim ve Müdürlükler : </label><br>
                    <select required name="birim" class="form-control" id="country" >
                      <option disabled selected value="">Lütfen Seçiniz</option>
                      <!-- ana başlıkların çekilmesi -->
                      <?php
                        $query = "SELECT * FROM countries";
                        $result = $con->query($query);
                        if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                            echo '<option value="'.$row['id'].'">'.$row['country_name'].'</option>';
                          }
                        }else{
                          echo '<option value="">Lütfen Birim Seçimi Yapınız</option>';
                        }
                        ?>
                    </select> <br><br>
                    <label for="counrty">İşlem ve Hizmet Ana Başlıklar : </label>
                      <br>
                      <select required name="islem" class="form-control" id="state">
                        <!-- selected="selected" -->
                        <option disabled selected value=""  >Lütfen Birim Seçiniz</option>
                      </select>
                  </div>
                  <button type="button" class="next-btn" required>İleri</button>
                </div>
                  <div class="step step-2  ">
                    <div class="form-group">
                      <label for="country"> İşlem ve Hizmetler : </label>
                      <br>
                      <select required name="altislem" id="city" class="form-control">
                        <option disabled selected value="" >Lütfen Ana İşlem ve Hizmet Seçiniz</option>
                      </select>
                      <br><br>
                      <label for="country">Personel : </label>
                      <br>
                      <select required name="personel" id="personel" class="form-control">
                        <option value="">Lütfen İşlem ve Hizmet Seçiniz</option>
                      </select>
                    </div>
                   
                    <button type="button" class="prev-btn">Geri </button>
                    <a href="saat.php"><button type="submit"  name="submit" class="sub-btn">Devam Et</button></a>
                  </div>
              </form>
            </div>
<script type="text/javascript">
  $(document).ready(function(){
    // Country dependent ajax
    $("#country").on("change",function(){
      var countryId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{countryId:countryId},
        success:function(data){
          $("#state").html(data);
          $('#city').html('<option value="">Lütfen Seçiniz</option>');
        }
      });
    });

    // state dependent ajax
    $("#state").on("change", function(){
      var stateId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{stateId:stateId},
        success:function(data){
          $("#city").html(data);
        }
      });
    });
    $("#city").on("change", function(){
      var cityId = $(this).val();
      $.ajax({
        url :"action.php",
        type:"POST",
        cache:false,
        data:{cityId:cityId},
        success:function(data){
          $("#personel").html(data);
        }
        
      });
    });
  });
 
  
  
</script>
          </section>
       </div>
       <!-- multi step form codes -->
       <script>
            const steps = Array.from(document.querySelectorAll("form .step"));
            const nextBtn = document.querySelectorAll("form .next-btn");
            const prevBtn = document.querySelectorAll("form .prev-btn");
            const form = document.querySelector("form");

            nextBtn.forEach((button) => {
              button.addEventListener("click", () => {
                changeStep("next");
              });
            });
            prevBtn.forEach((button) => {
              button.addEventListener("click", () => {
                changeStep("prev");
              });
            });
            function changeStep(btn) {
              let index = 0;
              const active = document.querySelector(".active");
              index = steps.indexOf(active);
              steps[index].classList.remove("active");
              if (btn === "next") {
                index++;
              } else if (btn === "prev") {
                index--;
              }
              steps[index].classList.add("active");
            }
      //  </script>
       <!--************************************************************************************-->
			 </div>
      </div>
	   </div>
	</div>
</div>


    <!--Footer Start-->

  <!--Footer Start-->
  
  <footer class="home3 footer wf100">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7">
          <p class="copyr">1901 - 2021 ©  <a href="index"> Sivas TSO - 120.Yıl </a></p>
        </div>
        <div class="col-md-5 col-sm-5">
          <ul class="footer-social">
            <li><a href="https://www.facebook.com/stsokurumsal" class="fb"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/stsokurumsal" class="tw"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/stsokurumsal" class="insta"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://linkedin.com/in/stsokurumsal" class="insta"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://www.youtube.com/c/stsokurumsal" class="yt"><i class="fab fa-youtube"></i></a></li>
            <li><a href="905397787876" class="yt"><i class="fab fa-whatsapp"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer End-->

<!--Wrapper End-->



