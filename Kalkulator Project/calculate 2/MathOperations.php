<?php

class MathOperations
{
    public function add(array $numbers)
    {
        return array_sum($numbers);
    }

    public function subtract(array $numbers)
    {
        return array_reduce(array_slice($numbers, 1), function ($carry, $item) {
            return $carry - $item;
        }, $numbers[0]);
    }

    public function multiply(array $numbers)
    {
        return array_reduce($numbers, function ($carry, $item) {
            return $carry * $item;
        }, 1);
    }

    public function divide(array $numbers)
    {
        return array_reduce(array_slice($numbers, 1), function ($carry, $item) {
            if ($item == 0) {
                throw new Exception("Pembagian dengan nol tidak diperbolehkan.");
            }
            return $carry / $item;
        }, $numbers[0]);
    }
}
