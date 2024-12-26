<?php

class MathOperations {
    // Menjumlahkan dua angka
    public function add($a , $b) {
        return $a + $b;
    }
    // Mengurangkan dua angka
    public function subtract($a, $b) {
        return $a - $b;
    }
    // Mengalikan dua angka
    public function multiply($a, $b) {
        return $a * $b;
    }
    // Membagi dua angka
    public function divide($a, $b) {
        if ($b == 0) {
            throw new Exception("Pembagian dengan nol tidak diperbolehkan.");
        }
        return $a / $b;
    }
}



