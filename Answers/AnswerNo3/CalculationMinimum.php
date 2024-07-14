<?php

namespace AnswerNo3;

class CalculationMinimum
{
    public function calc($stringList)
    {
        sort($stringList);
        // 0でない最小の数字のインデックスを見つける
        $firstNonZero = array_search(true, array_map('intval', $stringList));
        if ($firstNonZero > 0) {
            // 0でない最小の数字を先頭と入れ替え
            [$stringList[0], $stringList[$firstNonZero]] = [$stringList[$firstNonZero], $stringList[0]];
        }
        return (int)implode('', $stringList);
    }

    public function main($lines)
    {
        // 入力文字列を一文字ずつの配列に分解
        $stripedString = str_split($lines[0]);

        // バリデーション
        if(count($stripedString) < 1 || count($stripedString) > 100) {
            throw new \InvalidArgumentException("error:<制約> 1≤n≤100, 整数");
        }
        foreach ($stripedString as $inputString) {
            if (!is_numeric($inputString)) {
                throw new \InvalidArgumentException("error:<制約>10 進数の整数");
            }
        }

        $result = $this->calc($stripedString);
        return $result;
    }
}
