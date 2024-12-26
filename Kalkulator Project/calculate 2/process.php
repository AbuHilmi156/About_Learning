<?php
require_once 'Calculator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $numbers = array_map('trim', explode(',', $_POST['numbers']));
        $numbers = array_map('floatval', $numbers); // Konversi ke angka float
        $operation = $_POST['operation'];

        $calculator = new Calculator();
        $result = $calculator->calculate($numbers, $operation);

        header("Location: index.html?result=$result");
    } catch (Exception $e) {
        $error = urlencode($e->getMessage());
        header("Location: index.html?error=$error");
    }
}
