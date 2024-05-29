<?php
// CONSTRUSTOR DAN DESTRUCTORS
class Car
{
    private $brand; // Properti untuk merepresentasikan merek mobil

    // Konstruktor untuk menciptakan objek mobil dengan merek tertentu
    public function __construct($brand)
    {
        echo "A new car is created. <br>"; // Menampilkan pesan bahwa mobil baru telah diciptakan
        $this->brand = $brand; // Menginisialisasi properti brand dengan nilai yang diberikan
    }

    // Metode untuk mendapatkan merek mobil
    public function getBrand()
    {
        return $this->brand; // Mengembalikan merek mobil
    }

    // Destruktor untuk menampilkan pesan ketika objek mobil dihancurkan
    public function __destruct()
    {
        echo "The car is destroyed. <br>"; // Menampilkan pesan bahwa mobil telah dihancurkan
    }
}

// Membuat objek Car dengan merek "Toyota"
$car = new Car("Toyota");

// Menampilkan merek mobil
echo "Brand: " . $car->getBrand() . "<br>"; // Menampilkan merek mobil yang telah diinisialisasi
?>
<!-- Pada code di atas menggunakan class Car dan ada function __construct untuk menciptakan objek mobil dengan merek tertentu, dan function getBrand() untuk mendapatkan merek mobil, kemudian function __destruct() untuk menampilkan pesan ketika objek mobil dihancurkan. -->