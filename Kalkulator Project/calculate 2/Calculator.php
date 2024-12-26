<?php
require_once 'MathOperations.php';

class Calculator {
    protected $mathOperations;

    public function __construct() {
        $this->mathOperations = new MathOperations();
    }

    public function calculate(array $numbers, $operation) {
        switch ($operation) {
            case 'add':
                return $this->mathOperations->add($numbers);
            case 'subtract':
                return $this->mathOperations->subtract($numbers);
            case 'multiply':
                return $this->mathOperations->multiply($numbers);
            case 'divide':
                return $this->mathOperations->divide($numbers);
            default:
                throw new Exception("Operasi tidak dikenali.");
        }
    }
}
