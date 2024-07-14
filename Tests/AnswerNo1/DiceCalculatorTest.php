<?php

namespace Tests\AnswerNo1;

use PHPUnit\Framework\TestCase;
use AnswerNo1\DiceCalculator;

require_once __DIR__ . '/../../Answers/AnswerNo1/DiceCalculator.php';

class DiceCalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new DiceCalculator();
    }

    public function testInputValidation()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約> 2 ≤ input ≤100000, 整数');
        $this->calculator->main(['1']);

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約> 2 ≤ input ≤100000, 整数');
        $this->calculator->main(['100001']);
    }

    public function testCalculateMinDice()
    {
        $this->assertEquals(2, $this->calculator->calculateMinDice(13));
        $this->assertEquals(2, $this->calculator->calculateMinDice(10));
        $this->assertEquals(4, $this->calculator->calculateMinDice(25));
        $this->assertEquals(5, $this->calculator->calculateMinDice(26));
    }
}
