<?php

//Tugas Membuat 2 tampilan foto nama, alamat, no hp, jurusan menggunakan array multidimensi.
$Biodata = [
    'nama' => [
        'Naufal Askaril Akbar' => 'foto1.jpeg',
    ],
    'data' => [
        'Alamat' => 'Sumenep, Madura',
        'Nomor HP' => '0811346345',
        'Jurusan' => 'Teknologi Informasi',
    ],
];
// Menampilkan data biodata pertama
    foreach ($Biodata['nama'] as $key => $value) {
        echo "Nama: $key <br>"; // Menampilkan nama dengan format 'Nama: [Nama]'
        echo "<img src='$value' width='150' height='150'> <br>"; // Menampilkan foto dengan ukuran tersebut
    }
    foreach ($Biodata['data'] as $key => $value) {
        echo "$key: $value <br>"; // Menampilkan informasi data alamat, nomor HP, dan jurusan.
    }

        echo "<br>";

    $Biodata = [
        'nama' => [
            'Naufal A' => 'foto2.jpg', 
        ],
        'data' => [
            'Alamat' => 'Madura',
            'Nomor HP' => '0811346345',
            'Jurusan' => 'Teknologi Informasi',
        ],
    ];

// Menampilkan data biodata kedua
    foreach ($Biodata['nama'] as $key => $value) {
        echo "Nama: $key <br>"; // Menampilkan nama dengan format 'Nama: [Nama]'
        echo "<img src='$value' width='150' height='150'> <br>"; // Menampilkan foto dengan ukuran tersebut
    }
    foreach ($Biodata['data'] as $key => $value) {
        echo "$key: $value <br>"; // Menampilkan informasi data alamat, nomor HP, dan jurusan.
    }
?>