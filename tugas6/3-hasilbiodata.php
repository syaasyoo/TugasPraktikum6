<!DOCTYPE html>
<html>
 <head>
  <title>Biodata Mahasiswa</title>
 </head>
 <body>
 <?php
  $npm=$_GET['NPM'];
  $Nama=$_GET['Nama'];
  $jurusan=$_GET['jurusan'];
  $Tempat=$_GET['Tempat'];
  $Tgl=$_GET['Tgl'];
  $Bln=$_GET['Bln'];
  $Thn=$_GET['Thn'];
  $JK=$_GET['JK'];
  $alamat=$_GET['alamat'];
  $agama=$_GET['agama'];
  include "waktu.php";
  

  if($npm && $Nama &&  $jurusan &&  $Tempat && $Thn && $Tgl && $Bln && $JK 
      && $alamat && $agama != "")  {
   echo "<table>
   <h2>Biodata Mahasiswa</h2>
   <tr>
     <td>NPM</td>
     <td>: $npm</td>
  </tr>
  <tr>
     <td>Nama Lengkap</td>
     <td>: $Nama</td>
  </tr>
  <tr>
  <tr>
     <td>Jurusan</td>
     <td>: $jurusan</td>
  </tr>
  <tr>
     <td>Tempat dan Tanggal Lahir</td>
     <td>: $Tempat, $Tgl $Bln $Thn</td>
  </tr>
  <tr>
     <td>Jenis Kelamin</td>
     <td>: $JK  </td>
  </tr>
  <tr>
     <td>Agama</td>
     <td>: $agama </td>
  </tr>
  <tr>
     <td>Alamat: </td>
     <td> $alamat</td>
  </tr>
  <tr>
      <td>Biodata Tersimpan: </td>
      <td> $tanggal $waktu</td>
  </tr>
   </table>";
  }
  else{
   header('Location: 2-datatidaklengkap.php');
  }
 ?>
 </body>
</html>