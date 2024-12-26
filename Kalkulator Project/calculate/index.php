<?php

// Autoload atau include file class
// require_once 'MathOperations.php';
require_once 'Calculator.php';

try {
    // Membuat objek dari kelas kalkulator
    $calculator = new Calculator();

    // Melakukan beberapa operasi
    $a = 10;
    $b = 5;

    echo "Penjumlahan: " . $calculator->calculate($a, $b, 'add') . "\n";
    echo "Pengurangan: " . $calculator->calculate($a, $b, 'subtract') . "\n";
    echo "Perkalian: " . $calculator->calculate($a, $b, 'multiply') . "\n";
    echo "Pembagian: " . $calculator->calculate($a, $b, 'divide') . "\n";

} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
