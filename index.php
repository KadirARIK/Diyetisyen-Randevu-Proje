<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Paneli</title>
</head>
<style>
    body{

        background: url(img/image2.jpg);
    }
    
</style>
<link rel="stylesheet" href="css/stillendirme.css">
<body >
    <div class="container">
        <h3>Login</h3>
    <form action="#" method="Post">
    <div class="form-control">

            <b>Kullanıcı Adı: <br><br> <input type="text" name="ad"> <br>
            <br>
            <b>Şifre :<br> <br> <input type="password" name="sifre"> 
            <input type="submit" name="giris" value="Giriş Yap"> <br>
            
<?php

       
    
session_start();
$adi=$_POST['ad'];
$sifre=$_POST['sifre'];
if (isset($_POST['giris'])) {
    if ($adi=="müşteri" && $sifre=="9617") {
    header("Location:http://localhost/DiyetisyenProje/islemrandevu.php");
    
                                            }
   else if ($adi=="diyetisyen"&& $sifre=="1234") {
    
    header("Location:http://localhost/DiyetisyenProje/islemrandevu2.php");
                                             }

    else{
    echo "Kullanıcı adı veya şifre hatalı.";
    header("Refresh:5");
        }

}

session_destroy();


    ?>




    </div>
    </form>
    </div>
    
</body>
</html>