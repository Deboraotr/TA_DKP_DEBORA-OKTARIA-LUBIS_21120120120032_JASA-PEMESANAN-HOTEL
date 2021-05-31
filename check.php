<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hotel Reservation</title>
    <style>
        a{
            color           : black;
            font-family     : Lucida Bright;
            font-weight     : 600px;
            font-size       : x-large;
            padding         : 60px 60px;
            text-decoration : none;
        }

        body{
        background-image:url(bgTA.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 80%;
    }
    </style>
</head>
<body>

<div id = "menu_web">
    <img src="Logo Hotel 1.jpeg" alt="Gambar Logo" height="100" width="300">
    <a href="Home.html" id="menu">Home</a>
    <a href="Profil.html"  id="menu">Profil</a>
    <a href="Reservation.php"id="menu">Reservation</a>
    <a href="Contact.html"  id="menu">Contact</a>
    
    <hr>
    <br><br>
</div>

</body>
</html>

<?php
function hasil (){
    $tanggal = $_POST ['tanggal'];
    $namcus = $_POST ['namcus'];
    $noId = $_POST['noId'];
    $durasi = $_POST['durasi'];
    $tipe = $_POST['tipe'];
    $diskon;
    $total;
    error_reporting(0);

        //output program dan pemanggil array
        foreach($namcus as $key => $val){
        ?>

<html>
<head>
<style>
.title{
            text-align: center;
            font-family: Verdana;
            font-size: 2.5em;
            color: black;
        }
    p{
        text-align: center;
        font-size :25px;
        font-family : Bradley Hand ITC;
        font-weight : 30px;  
    }
</style>
<body>
    <h1 class="title">
       DATA CHECK-IN 
   </h1>
</body>
</html>

    <table border="0" width = "500" cellpadding = "1" cellspacing = "1">

        <tr>
            <td><?php echo '&nbsp Tanggal Booking';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td><?php echo '&nbsp'.$tanggal;?></td>
            
        </tr>

        <tr>
            <td><?php echo '&nbsp Nama Customer';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td><?php echo '&nbsp'.$namcus[$key];?></td>
        </tr>
        
        <tr>
            <td><?php echo '&nbsp No Identitas';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td><?php echo '&nbsp'.$noId[$key];?></td>
        </tr>

        <tr>
            <td><?php echo '&nbsp Tipe Kamar';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td><?php echo '&nbsp'.$tipe;?></td>
        </tr>
        
        <tr>
            <td><?php echo '&nbsp Durasi Penginapan';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td><?php echo '&nbsp'.$durasi.' Malam';?></td>
        </tr>

        <tr>
            <td><?php echo '&nbsp Diskon';?></td>
            <td><?php echo '&nbsp : ';?></td>
            <td>
           
            <?php

            

    class Tipekamar{
        public $deluxe;
        public $superior;

        public function setdeluxe($deluxe){
        $this->deluxe = $deluxe;
        }
        public function getdeluxe(){
        return $this-> deluxe; 
        }

        public function setsuperior($superior){
        $this->superior = $superior;
        }
        public function getsuperior(){
        return $this-> superior; 
        }
    }
    

    $tk = new Tipekamar();

    $tk-> setdeluxe(850000);
    $tk-> setsuperior(500000);


    ?>
          <?php
         //Menentukan Diskon 
         if($tipe){
            if($durasi == ""){
                echo "Durasi belum diisi";
            }elseif($tipe == "Deluxe"){
              $hasil = $tk->getdeluxe()*$durasi;
              $hasil;
            }elseif($tipe == "Superior"){
              $hasil = $tk->getsuperior()*$durasi;
              $hasil;
            }

        if($hasil >2000000){
            $diskon = (20/100)*$hasil;
            $total = $hasil - $diskon;
            echo "&nbspPotongan diskon 20%";
        }elseif($hasil >1500000){
            $diskon = (10/100)*$hasil;
            $total = $hasil -$diskon;
            echo "&nbspPotongan diskon 10%";
        }else{
            echo "&nbspAnda tidak berhak mendapatkan diskon";
        }
    }?>


        

    </td>
</tr>

<tr>
 <td><?php echo '&nbsp Total Bayar';?></td>
 <td><?php echo '&nbsp : '; ?></td>
 <td>

<?php
    //menentukan total biaya
if($tipe){
    if($durasi == ""){
        echo "Durasi belum diisi";
    }elseif($tipe == "1"){
    $hasil =$tk->getdeluxe() * $durasi ;
    $hasil;
    }elseif($tipe == "2"){
    $hasil = $tk-> getsuperior() * $durasi;
    $hasil;
    }

 if($hasil > 2000000){
    $diskon = (20/100)*$hasil;
    $total = $hasil - $diskon;
    echo "Rp " . number_format($total, 2, ",", ".");
    }elseif($hasil > 1500000){
    $diskon = (10/100)*$hasil;
    $total = $hasil - $diskon;
    echo "Rp " . number_format($total, 2, ",", ".");
    }else{
        echo "Rp " . number_format($hasil, 2, ",", ".");
    }
}?>
 </td>
  </tr>
    </table><br><br><br><br><br>
    <?php
    }
 }?>

<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td>
            <?php
            //Pemanggilan Function
            hasil();
            ?>
        </td>
    </tr>
</table>
<p>Terimakasih telah memilih layanan kami</br> Time To Relax!</p>