<?php
// Variabel
echo "Biodata<br>";

$siswa = "<br>Nama : Julia Sinta Christinawati";
$kelas = "<br>Kelas : XI RPL 4";
$alamat = "<br>Alamat : Malang";
$kelamin = "<br>Kelamin : Perempuan";
$agama = "<br>Agama : Kristen";

echo $siswa;
echo $kelas;
echo $alamat;
echo $kelamin;
echo $agama;


// Menghitung Luas Segitiga (OPERATOR)
$a = 13;
$b = 12;
$hasil= 1/2 ($a * $b);

echo $hasil;

// Kondisi 
$harga =8000;
if ($harga < 5000){
    echo "saya akan beli kopi";
} else if ($harga <=8000){
    echo "saya akan menawar";
}else{
    echo "Saya tidak membeli";
}

// Function
function quote(){
    echo "HELLOW";
}
quote();
?>