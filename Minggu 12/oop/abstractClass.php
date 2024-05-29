<!-- Contoh Sederhana Abstraksi dalam PHP -->
<?php

// Definisi kelas abstrak Shape
abstract class Shape
{
    abstract public function calculateArea(); // Metode abstrak untuk menghitung luas area, harus diimplementasikan oleh kelas turunannya
}

// Definisi kelas Circle yang merupakan turunan dari kelas Shape
class Circle extends Shape
{
    private $radius; // Properti untuk menyimpan nilai radius lingkaran

    // Konstruktor untuk menginisialisasi nilai radius saat pembuatan objek
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementasi metode calculateArea() dari kelas Shape untuk menghitung luas area lingkaran
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2); // Menggunakan formula luas lingkaran: pi * r^2
    }
}

// Definisi kelas Rectangle yang merupakan turunan dari kelas Shape
class Rectangle extends Shape
{
    private $width; // Properti untuk menyimpan nilai lebar persegi panjang
    private $height; // Properti untuk menyimpan nilai tinggi persegi panjang

    // Konstruktor untuk menginisialisasi nilai lebar dan tinggi saat pembuatan objek
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode calculateArea() dari kelas Shape untuk menghitung luas area persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height; // Menghitung luas area persegi panjang: panjang * lebar
    }
}

// Membuat objek Circle dengan radius 5
$circle = new Circle(5);
// Membuat objek Rectangle dengan lebar 4 dan tinggi 6
$rectangle = new Rectangle(4, 6);

// Menampilkan luas area lingkaran
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
// Menampilkan luas area persegi panjang
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
?>
<!-- Pada code di atas menggunakan class Shape dan di wariskan ke class Circle dan class Rectangle menggunakan methode abstrack class. -->