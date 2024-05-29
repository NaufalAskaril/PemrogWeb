<?php
// ENCAPSULATION AND ACCESS MODIFIERS
class Animal
{
    public $name; // Properti publik untuk menyimpan nama hewan
    protected $age; // Properti terlindungi untuk menyimpan usia hewan
    private $color; // Properti pribadi untuk menyimpan warna hewan

    // Konstruktor untuk menginisialisasi nama, usia, dan warna hewan saat pembuatan objek
    public function __construct($name, $age, $color)
    {
        $this -> name = $name; // Menginisialisasi properti nama
        $this -> age = $age; // Menginisialisasi properti usia
        $this -> color = $color; // Menginisialisasi properti warna
    }

    // Metode untuk mendapatkan nama hewan
    public function getName()
    {
        return $this -> name; // Mengembalikan nilai properti nama
    }

    // Metode untuk mendapatkan usia hewan
    public function getAge()
    {
        return $this -> age; // Mengembalikan nilai properti usia
    }

    // Metode untuk mendapatkan warna hewan
    public function getColor()
    {
        return $this -> color; // Mengembalikan nilai properti warna
    }
}

// Membuat objek Animal dengan nama "Dog", usia 3 tahun, dan warna "Brown"
$animal = new Animal("Dog", 3, "Brown");

// Menampilkan nama hewan (mengakses properti publik langsung)
echo "Name: " . $animal -> name . "<br>";

// Menampilkan usia hewan (menggunakan metode getAge untuk mengakses properti terlindungi)
echo "Age: " . $animal -> getAge() . "<br>";

// Menampilkan warna hewan (menggunakan metode getColor untuk mengakses properti pribadi)
echo "Color: " . $animal -> getColor() . "<br>";
?>
<!-- Pada code di atas menggunakan class Animal dan memiliki function __construct($name, $age, $color), untuk menginisialisasi nama, 
usia, dan warna, kemudian function getName() untuk mendapatkan nama hewan, dan function getAge untuk mendapatkan usia hewan, 
dan function getColor() untuk mendapatkan warna hewan.  -->