<?php

namespace AnswerNo1;

class DiceCalculator
{
    public function calculateMinDice($boardLength)
    {
        return ceil(($boardLength - 1) / 6);
    }

    public function main($lines)
    {
        $value = intval($lines[0]);

        if ($value < 2 || $value > 100000) {
            throw new \InvalidArgumentException("error:<制約> 2 ≤ input ≤100000, 整数");
        }
        $result = $this->calculateMinDice($value);
        return $result;
    }
}
