<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'penjualan';

try {
    $koneksi = new mysqli($host, $user, $pass, $db);
    $koneksi->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    die("Koneksi Database Gagal: " . $e->get_Massage() );
}

?>