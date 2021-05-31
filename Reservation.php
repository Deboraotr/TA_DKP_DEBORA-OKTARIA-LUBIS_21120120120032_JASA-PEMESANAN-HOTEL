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
       p{
        color           : black;
        text-align      : center;
        background-color: #F0F8FF;
        font-family     : Impact;
        font-weight     : 60px;
        font-size       : 0px;   
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
<p>Terimakasih telah memilih pelayanan hotel kami</br> silahkan lakukan reservasi dengan mengisi form yang tersedia di bawah ini <br></br>


</p>
 <!-- Tampilan Awal Form Pemesanan -->
<html>
<head>
<style>
    body{
        background-image: url(bgTA.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 80%;
    }
      
</style>
</head>
<form method="POST" name="frmpost" action="check.php">
<table width="500" border="5" cellpadding="0" cellspacing="0" align="center" >
  <tr>
    <th><h2> FORM PEMESANAN </h2></th>
 </tr>
 <tr>
    <td>
         <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">
         <h1 class="title">
            <tr height="40">
                <td font size="30px" width="200" valign="center">Tanggal Booking</td>
                <td  width="10" valign="center"> : </td>
                <td><input type="date" name="tanggal" required >
    </h1>
    </td>
 </tr>

            <tr height="30">
                <td width="200" valign="center">Nama Customer</td>
                <td width="10" valign="center"> : </td>
                <td><input name="namcus[]" type="text" size="20" required /></td>
 </tr>

 <tr height="30">
                <td width="200" valign="center">No Identitas</td>
                <td width="10" valign="center"> : </td>
                <td><input name="noId[]" type="text" size="40" required /></td>
</tr>
 
<tr height="30">
                <td width="200" valign="center">Tipe Kamar</td>
                <td width="10" valign="center"> : </td>
                <td>
                    <select name="tipe" required>
                    <option name="-" value="-" hidden>-</option>
                    <option name="deluxe" value="Deluxe">Deluxe</option>
                    <option name="superior" value="Superior">Superior</option>
                    </select>
    </td>
 </tr>

            <tr height="30">
                <td width="200" valign="center">Durasi Menginap</td>
                <td width="10" valign="center"> : </td>
                <td><input required name="durasi" type="text" size="10" /> Malam</td>
</tr>
 
 <tr>
                <td align="right" colspan="2"><input type="submit" name="btnOk" value="Simpan" /></td>
                <td><input type="reset" name="btnCancel" value="Cancel" /></td>
 </tr>
    </table>
    </table>
     <br>
     <br>
 
 
    
</form>
</center>
</html>