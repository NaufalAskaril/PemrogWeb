<?php
session_start();
if (isset($_SESSION['pengguna'])) {
    unset($_SESSION['pengguna']);
}
echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";
