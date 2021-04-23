<?php

namespace Models;

use App\Models\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function testCalculateAddition()
    {
        // given: addition
        $calc = new Calculator();
        $operator = "+";

        // when: calculation executed
        $result = $calc->calculate(4, 5, $operator);

        // then: expect numbers to be added
        self::assertEquals(9, $result, "Addition failed");
    }

    public function testCalculateSubtraction()
    {
        // given: subtraction
        $calc = new Calculator();
        $operator = "-";

        // when: calculation executed
        $result = $calc->calculate(4, 5, $operator);

        // then: expect numbers to be added
        self::assertEquals(-1, $result, "Addition failed");
    }

    public function testCalculateException()
    {
        // given: subtraction
        $calc = new Calculator();
        $operator = "_";

        // when: calculation executed, then: expect an exception
        $this->expectException(\Exception::class);
        $calc->calculate(4, 5, $operator);
    }
}
