<?php
  function data(){
  $tanggal= isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
  $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
  $nomor = isset($_POST['nomor']) ? $_POST['nomor'] : '';
  $kecamatan = isset($_POST['kecamatan']) ? $_POST['kecamatan'] : '';
  $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
  $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
  error_reporting(0);
  
  class harga{
    public $pangkah;
    public $tarub;
    public $diskon;
    public $total;
  }
  
        //Perhitungan
        foreach($nama as $key => $value){
        ?>
          <table border="0" width="500" cellpadding="1" cellspacing="1" >
      
            <tr>
              <td><?php echo '&nbsp Tanggal';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tanggal;?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp Nama';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$nama[$key];?></td>
            </tr>
          
            <tr>
              <td><?php echo '&nbsp No Telepon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$nomor[$key];?></td>
            </tr> 

            <tr>
              <td><?php echo '&nbsp Kecamatan';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$kecamatan;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Alamat Lengkap';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$alamat[$key];?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Diskon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>

                <?php 
              //Menentukan Diskon
              $pangkah = 4000;
              $tarub = 5000;
                if($kecamatan){
                  if($jumlah == ""){
                      echo "Jumlah belum diisi";
                  }elseif($kecamatan == "Pangkah"){
                    $hasil = $pangkah * $jumlah ;
                    $hasil; 
                  }elseif($kecamatan == "Tarub"){
                    $hasil = $tarub * $jumlah;
                    $hasil; 
                  } 
                  if($hasil >= 15000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 20%";
                  }else{
                    echo "&nbspAnda tidak mendapatkan diskon";
                    }
                }?>

              </td>
            </tr> 
            <tr>
              <td><?php echo '&nbsp Total Bayar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>

                <?php 
              //Menentukan Biaya Total
                if($hasil){ 
                  if($hasil >= 15000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }else{
                    echo "&nbsp".$hasil;
                  } 
                }?>
              </td>            
            </tr>
          </table>
            <?php 
          }
        }?> 
        
<!-- Formulir Pemesanan -->
<!DOCTYPE html>
<html>
<head>
  <title>Web rusak</title>
</head>
<body>
  <font size="7" color="white" face="Century Gothic"><center><b>SELAMAT DATANG DI DEPOT AIR MINUM TIRTA SEGAR</b></center></font>
  <font size="5" color="white" face="Century Gothic"><center><b>SIAP ANTAR JEMPUT</b></center></font>
  <font size="5" color="white" face="Century Gothic"><center><b>ANDA HANYA TINGGAL MENUNGGU DI RUMAH</b></center></font>
  <center><img src="depot.jpg" style="width:650px; height:380px; border: 3px solid white;" </center>
  <body style="background-image: url(bg.jpg);">
</body>
 <form method="POST" name="frmpost" action="">
 <table width="500" border="5" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th><h2> Formulir Pemesanan </h2></th>
  </tr>
  <tr> 
    <td>
      <table width="500" border="0" cellpadding="6" cellspacing="6" align="center"> 
        <tr height="30"> 
            <td width="200" valign="center"><b>Tanggal</b></td>
            <td width="10" valign="center"> : </td>
            <td><input type="date" name="tanggal"></td>
        </tr> 
        <tr height="30">
          <td width="200" valign="center"><b>Nama Pembeli</b></td>
          <td width="10" valign="center"> : </td>
          <td><input name="nama[]" type="text" size="40" /></td>
        </tr> 
        <tr height="30"> 
          <td width="200" valign="center"><b>No Telepon</b></td>
          <td width="10" valign="center"> : </td>
          <td><input name="nomor[]" type="text" size="40" /></td>
        </tr> 
        <tr height="30"> 
          <td width="200" valign="center"><b>Kecamatan</b></td>
          <td width="10" valign="center"> : </td>
          <td>
            <select name="kecamatan">
              <option name="-" value="-" hidden>-</option>
              <option name="pangkah" value="Pangkah">Pangkah</option>
              <option name="tarub" value="Tarub">Tarub</option>
            </select>
          </td>
        </tr> 
        <tr height="30"> 
          <td width="200" valign="center"><b>Alamat Lengkap</b></td>
          <td width="10" valign="center"> : </td>
          <td><input name="alamat[]" type="text" size="40" /></td>
        </tr> 
        <tr height="30"> 
          <td width="200" valign="center"><b>Jumlah</b></td>
          <td width="10" valign="center"> : </td>
          <td><input  name="jumlah" type="text" size="5"  /> (Rp. 3000/galon)</td>
        </tr> 
        <tr>
        </tr> 
      </table>
      <font size="3">*ongkir kecamatan Pangkah Rp. 1.000/galon</font><br>
      <font size="3">*ongkir kecamatan Tarub Rp. 2.000/galon</font><br>
      </table>
      </form>
      <br>

 <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
        <tr>
          <td>

            <?php
            //Pemanggilan Function
              data();
            ?>
          </td>
        </tr>
 </table> 
</form>
</center>
</html>