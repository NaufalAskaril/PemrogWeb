<?php
// Contoh Penggunaan Interface dalam PHP
interface Shape {
    public function calculateArea();
}

// Definisi interface Color yang memiliki satu metode getColor()
interface Color
{
    public function getColor();
}

// Definisi kelas Circle yang mengimplementasikan antarmuka Shape dan Color
class Circle implements Shape, Color {
    private $radius; // Properti untuk menyimpan nilai radius lingkaran
    private $color; // Properti untuk menyimpan warna lingkaran

    // Konstruktor untuk menginisialisasi nilai radius dan warna saat pembuatan objek
    public function __construct($radius, $color)
    {
        $this -> radius = $radius;
        $this -> color = $color;
    }

    // Implementasi metode calculateArea() dari antarmuka Shape untuk menghitung luas area lingkaran
    public function calculateArea()
    {
        return pi() * pow($this -> radius, 2); // Menggunakan rumus luas lingkaran: pi * r^2
    }

    // Implementasi metode getColor() dari antarmuka Color untuk mendapatkan warna lingkaran
    public function getColor()
    {
        return $this -> color;
    }
}

// Membuat objek Circle dengan radius 5 dan warna "Blue"
$circle = new Circle(5, "Blue");

// Menampilkan luas area lingkaran
echo "Area of Circle: " . $circle -> calculateArea() . "<br>";
// Menampilkan warna lingkaran
echo "Color of Circle: " . $circle -> getColor() . "<br>";
?>

<!-- Pada code di atas menggunakan interface Shape dan ada function metode calculateArea() yang di implementasi oleh kelas Circle dan Rectangle, 
pada kedua class tersebut juga memiliki metode calculateArea() dengan karakteristik yang berbeda, kemudian printArea() untuk mencetak luas dari objek yang ada.  -->