<?php
session_start();

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    if (isset($_SESSION[$username])) {

        $stored_password = $_SESSION[$username]['password'];


        if ($password === $stored_password) {

            $_SESSION[$username]['logged_in'] = true;


            if (isset($_POST["remember"])) {
                setcookie('usernameku', $username, time() + (3600 * 365 * 24 * 60 * 60), '/');
                setcookie("passwordku", $password, time() + (3600 * 365 * 24 * 60 * 60), '/');
            }
            $_SESSION["pengguna"]['nama'] = $_SESSION[$username]['nama'];
            $_SESSION["pengguna"]['email'] = $_SESSION[$username]['email'];
            $_SESSION["pengguna"]['password'] = $_SESSION[$username]['password'];
            $_SESSION["pengguna"]['telepon'] = $_SESSION[$username]['telepon'];
            $_SESSION["pengguna"]['alamat'] = $_SESSION[$username]['alamat'];
            $_SESSION["pengguna"]['nowa'] = $_SESSION[$username]['nowa'];
            $_SESSION["pengguna"]['username'] = $username;
            $_SESSION["pengguna"]['foto'] = "";
            echo "<script>alert('Login Berhasil');</script>";
            echo "<script>location ='index.php';</script>";
        }
    }


    echo "<script>alert('Username atau Password anda salah');</script>";
    echo "<script>location ='index.php';</script>";
}
