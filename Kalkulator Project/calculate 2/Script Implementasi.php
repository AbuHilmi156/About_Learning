<?php

require_once 'Calculator.php';

try {
    // Membuat objek dari kelas kalkulator
    $calculator = new Calculator();

    // Melakukan beberapa operasi
    $numbers = [10, 5, 3]; // Contoh dengan lebih dari dua angka

    echo "Penjumlahan: " . $calculator->calculate($numbers, 'add') . "\n";
    echo "Pengurangan: " . $calculator->calculate($numbers, 'subtract') . "\n";
    echo "Perkalian: " . $calculator->calculate($numbers, 'multiply') . "\n";
    echo "Pembagian: " . $calculator->calculate($numbers, 'divide') . "\n";

} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}

