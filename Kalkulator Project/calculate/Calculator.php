<?php

require_once 'MathOperations.php';

class Calculator {

    private $mathOperations ;

    public function __construct() {
        $this->mathOperations = new MathOperations();
    }

    // Memilih operasi yang sesuai dan melakukan kalkulasi
    public function calculate($a, $b, $operation) {
        switch ($operation) {
            case 'add':
                return $this->mathOperations->add($a, $b);
            case 'subtract':
                return $this->mathOperations->subtract($a, $b);
            case 'multiply':
                return $this->mathOperations->multiply($a, $b);
            case 'divide':
                return $this->mathOperations->divide($a, $b);
            default:
                throw new Exception("Operasi tidak valid.");
        }
    }
}
