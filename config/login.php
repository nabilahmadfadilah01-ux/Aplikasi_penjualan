<?php
session_start();
require_once 'config/database.php';

if (isset($_SESSION['id_user'])) {
    header("Location: index.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] == "POST")
?>