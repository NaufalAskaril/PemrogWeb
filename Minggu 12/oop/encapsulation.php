<?php

// Definisi kelas Car
class Car
{
    // Properti model dan color dengan hak akses private agar hanya dapat diakses di dalam kelas ini
    private $model;
    private $color;

    // Konstruktor untuk inisialisasi model dan color saat pembuatan objek
    public function __construct($model, $color)
    {
        $this->model = $model; // Menginisialisasi properti model
        $this->color = $color; // Menginisialisasi properti color
    }

    // Metode untuk mengambil nilai properti model
    public function getModel()
    {
        return $this->model; // Mengembalikan nilai properti model
    }

    // Metode untuk mengatur nilai properti color
    public function setColor($color)
    {
        $this->color = $color; // Mengatur nilai properti color
    }

    // Metode untuk mengambil nilai properti color
    public function getColor()
    {
        return $this->color; // Mengembalikan nilai properti color
    }
}

// Membuat objek Car dengan model "Toyota" dan color "Blue"
$car = new Car("Toyota", "Blue");

// Menampilkan model mobil
echo "Model: " . $car->getModel() . "<br>";
// Menampilkan warna mobil
echo "Color: " . $car->getColor() . "<br>";

// Mengubah warna mobil menjadi "Red"
$car->setColor("Red");

// Menampilkan warna mobil yang telah diubah
echo "Updated Color: " . $car->getColor() . "<br>";
?>
<!-- Pada code di atas terdapat Properti model dan color dengan hak akses private agar hanya dapat diakses di dalam kelas ini, 
kemudian Konstruktor untuk inisialisasi model dan color saat pembuatan objek, Metode untuk mengambil nilai properti model, 
Metode untuk mengatur nilai properti color, Metode untuk mengambil nilai properti color -->