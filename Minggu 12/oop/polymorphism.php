<?php
    // Mendefinisikan interface Shape dengan method abstract calculateArea().
    interface Shape{
        public function calculateArea();
    }

    // Membuat class Circle yang mengimplementasikan interface Shape.
    class Circle implements Shape{   
        private $radius;

        // Membuat constructor untuk Circle dengan parameter radius.
        public function __construct($radius){
            $this->radius = $radius;
        }

        // Mengimplementasikan method calculateArea() untuk menghitung luas lingkaran.
        public function calculateArea()
        {
            return pi() * pow($this->radius, 2); // Rumus luas lingkaran.
        }
    }

    // Membuat class Rectangle yang mengimplementasikan interface Shape.
    class Rectangle implements Shape{
        private $width;
        private $height;

        // Membuat constructor untuk Rectangle dengan parameter width dan height.
        public  function __construct($width, $height){
            $this->width = $width;
            $this->height = $height;
        }

        // Mengimplementasikan method calculateArea() untuk menghitung luas persegi panjang.
        public function calculateArea()
        {
            return $this->width * $this->height; // Rumus luas persegi panjang.
        }
    }

    // Membuat fungsi printArea yang menerima objek dari kelas yang mengimplementasikan interface Shape.
    function printArea(Shape $shape){
        echo "The area of the shape is: " . $shape->calculateArea() . "<br>"; // Cetak hasil perhitungan luas.
    }

    // Membuat objek lingkaran dengan jari-jari 5 dan persegi panjang dengan panjang 4 dan lebar 6.
    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);

    // Membuat fungsi printArea untuk mencetak luas kedua bentuk.
    printArea($circle);
    printArea($rectangle);
?>

<!-- Pada code di atas menggunakan interface Shape dan ada function metode calculateArea() 
yang di implementasi oleh kelas Circle dan Rectangle, 
pada kedua class tersebut juga memiliki metode calculateArea() dengan karakteristik yang berbeda, 
kemudian printArea() untuk mencetak luas dari objek yang ada. -->