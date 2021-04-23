<?php


namespace App\Models;


class Calculator
{
    public function calculate(int $num1, int $num2, string $operator): float
    {
        if($operator == "+") {
            $result = $num1 + $num2;
        } else if($operator == "-") {
            $result = $num1 - $num2;
        } else if($operator == "*") {
            $result = $num1 * $num2;
        } else if($operator == "/") {
            $result = $num1 / $num2;
        } else {
            throw new \Exception("Unsupported operator");
        }

        return $result;
    }
}
