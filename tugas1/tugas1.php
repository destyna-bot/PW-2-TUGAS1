<?php
 function tampil($nama, $nim, $kelas){
     echo "Nama : $nama \n" ;
     echo "Nim : $nim \n" ;
     echo "Kelas : $kelas \n" ;
 }
 //memasukan value ke variabel nama, argv = argumen 
 $nama = $argv[1]; //argumen ke satu yaitu di variabel nama
 $nim = $argv[2];  //argumen ke dua yaitu di variabel nim
 $kelas = $argv[3]; //argumen ke tiga yaitu di variabel kelas

 tampil($nama, $nim, $kelas);
?>