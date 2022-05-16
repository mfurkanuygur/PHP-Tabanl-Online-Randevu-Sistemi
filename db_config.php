<?php
    session_start();
    
    $con=mysqli_connect("localhost","root",12345678,"qw");
    if(!$con){
        /* Bağlantı Başarısız İse */
        die('Bağlantı Başarısız. Hata: ' .mysqli_connect_error());
        }else{
        /* Bağlantı Başarılı İse */
        echo 'veri tabanı bağlantısı başarılı....';
        };
        
?>