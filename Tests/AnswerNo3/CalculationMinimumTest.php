<?php

namespace Tests\AnswerNo3;

use PHPUnit\Framework\TestCase;
use AnswerNo3\CalculationMinimum;

require_once __DIR__ . '/../../Answers/AnswerNo3/CalculationMinimum.php';

class CalculationMinimumTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new CalculationMinimum();
    }

    public function testMainWithInvalidInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約>10 進数の整数');
        $this->calculator->main(['1a2b3']);
    }

    public function testMainWithTooLongInput()
    {
        $longInput = str_repeat('1', 101);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約> 1≤n≤100, 整数');
        $this->calculator->main([$longInput]);
    }

    public function testMain()
    {
        $this->assertEquals(102, $this->calculator->main(['201']));
        $this->assertEquals(1111222222, $this->calculator->main(['1221212221']));
        $this->assertEquals(40059, $this->calculator->main(['95004']));
        $this->assertEquals(456789, $this->calculator->main(['987654']));
    }
}
