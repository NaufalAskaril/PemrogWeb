<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penambahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat <br><br>";

$hasilSama              = $a = $b;
$hasilTidakSama         = $a != $b;
$hasilLebihKecil        = $a < $b;
$hasilLebihBesar        = $a > $b;
$hasilLebihKecilSama    = $a <= $b;
$hasilLebihBesarSama    = $a >= $b;

echo "Apakah a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br><br>";

$hasilAND   = $a && $b ;
$hasilOr    = $a || $b ;
$hasilNotA  = !$a  ;
$hasilNotB  = !$b  ;

echo "Hasil dari operasi AND: " . ($hasilAND ? "True" : "False") . "<br>";
echo "Hasil dari operasi OR: " . ($hasilOr ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada a: " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Hasil dari operasi NOT pada b: " . ($hasilNotB ? "True" : "False") . "<br> <br>";

$a += $b;
echo "Nilai a setelah ditambah dengan b: " . $a . "<br>";
$a -= $b;
echo "Nilai a setelah dikurangi dengan b: " . $a . "<br>";
$a *= $b;
echo "Nilai a setelah dikali dengan b: " . $a . "<br>";
$a /= $b;
echo "Nilai a setelah dibagi dengan b: " . $a . "<br>";
$a %= $b;
echo "Sisa bagi a setelah dibagi dengan b: " . $a . "<br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Apakah a identik dengan b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br><br>";

$jumlahTotalKursi = 45;
$jumlahKursiTerisi = 28;
$jumlahKursiKosong = $jumlahTotalKursi - $jumlahKursiTerisi;
$persentaseKursiKosong = ($jumlahKursiKosong / $jumlahTotalKursi) * 100;

echo "Jumlah kursi yang masih kosong di restoran: " . $jumlahKursiKosong . "<br>";
echo "Persentase kursi yang masih kosong di restoran: " . number_format($persentaseKursiKosong, 2) . "%";

?>