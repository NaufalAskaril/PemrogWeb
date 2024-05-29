<?php
class Car{
    // Properti untuk merepresentasikan merek mobil
    public $brand;

    // Metode untuk memulai mesin mobil
    public function startEngine(){
        // Menampilkan pesan bahwa mesin telah dinyalakan
        echo "The engine of the car is started!";
    }
}

// Membuat objek $car dari kelas Car
$car = new Car();
$car -> brand = "Toyota"; // Menetapkan merek Toyota ke properti brand milik objek $car

// Membuat objek $car2 dari kelas Car
$car2 = new Car();
$car2 -> brand = "Honda"; // Menetapkan merek Honda ke properti brand milik objek $car2

// Memanggil metode startEngine() dari objek $car
$car -> startEngine(); // Menampilkan pesan bahwa mesin telah dinyalakan
echo $car2 -> brand; // Menampilkan merek mobil dari objek $car2
?>

<!-- Pada code di atas pembuatan oop untuk class car dengan atribut brand, dan function startEngine, 
dengan implementasi instansiasi dalam 1 file, memiliki 2 objek baru yaitu car1 dan car2, 
pada car1 memiliki brand Toyota, dan car2 memiliki brand Honda. -->