<?php
$host="localhost";
$user="root";
$pass="";
$db="conquer";

//melakukan koneksi ke database dengan variabel $host, $user dan $password
$koneksi=@mysql_connect($host,$user,$pass);
if(!$koneksi){
    echo "Gagal melakukan koneksi <br/>:".mysql_error();
    exit();
    
}
$pilihdb=@mysql_select_db($db,$koneksi); 
//menyimpan perintah pemilihan database dalam variabel $pilihdb

if(!$pilihdb){
    exit ("Gagal melakukan hubungan dengan database<br> Kesalahan :".mysql_error());
}
?>