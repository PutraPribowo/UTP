

<?php
include('kon.php'); //memasukan varibel koneksi
//pengecekan input
$u=true;
if($_POST['username']==""){
echo "Masukan Username !";
$u=false;

}
$pas=true;
if($_POST['password']=="") {
 echo "Masukan Password dulu!";
 $pas=false;
}
$ubah=$_POST['password']; //meyimpan varibel $_POST yang dikirim
$md5=md5($ubah); //merubah variabel $ubah ke MD5
$kembali="simpan.php";
$periksa=($u&&$pas)?true:false;
//pemeriksaan input selesai, bila benar langsung jalankan perintah selanjutnya
if($periksa==true) {
 $aksi=sprintf("INSERT INTO user VALUES('null','%s','%s')",
 $_POST['username'], $md5);
 $query=mysql_query($aksi,$koneksi);
 if(!$query) {
  echo "Gagal Koneksi".mysql_error();
  $kembali="simpan.php";//jika error di kembalikan ke login.php
 }else{
 include "view_all_user.php";
 }
}else{
$kembali="simpan.php";
}

?>