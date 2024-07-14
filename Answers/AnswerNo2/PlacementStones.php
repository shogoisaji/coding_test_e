<?php

namespace AnswerNo2;

class PlacementStones
{
    public function placementStones($lines)
    {
        // 初期状態
        $stoneState = ['b', 'w'];
        for($i = 0; $i < count($lines); $i++) {
            // 置く石の色（初手は黒）
            $currentStone = $i %2 == 0 ? 'b' : 'w';
            if($lines[$i] == 'R') {
                // 右端に置く
                $stoneState = [...$stoneState, $currentStone];
            } else {
                // 左端に置く
                $stoneState = [$currentStone, ...$stoneState];
            }

            // 同じ色の石を探し、間の石をひっくり返す
            $sameColorIndex = -1;
            if ($lines[$i] == 'R') {
                for ($j = count($stoneState) - 2; $j >= 0; $j--) {
                    if ($stoneState[$j] === $currentStone) {
                        $sameColorIndex = $j;
                        break;
                    }
                }
                if ($sameColorIndex !== -1 && $sameColorIndex < count($stoneState) - 2) {
                    $stoneState = $this->reverseStone($stoneState, $sameColorIndex + 1, count($stoneState) - 2);
                }
            } else {
                for ($j = 1; $j < count($stoneState); $j++) {
                    if ($stoneState[$j] === $currentStone) {
                        $sameColorIndex = $j;
                        break;
                    }
                }
                if ($sameColorIndex !== -1 && $sameColorIndex > 1) {
                    $stoneState = $this->reverseStone($stoneState, 1, $sameColorIndex - 1);
                }
            }
        }
        return $stoneState;
    }


    public function reverseStone($stoneState, $start, $end)
    {
        // 開始位置から終了位置までの石をひっくり返す
        for ($i = $start; $i <= $end; $i++) {
            $stoneState[$i] = ($stoneState[$i] === 'b') ? 'w' : 'b';
        }
        return $stoneState;
    }

    public function main($lines)
    {
        // 入力文字列を一文字ずつの配列に分解
        $stripedString = str_split($lines[0]);
        if(count($stripedString) < 1 || count($stripedString) > 1000000) {
            throw new \InvalidArgumentException("error:<制約> inputの長さは 1 以上 10（6乗） 以下");
        }
        foreach ($stripedString as $inputString) {
            if($inputString != "R" && $inputString != "L") {
                throw new \InvalidArgumentException("error:<制約>R or L");
            }
        }
        $result = $this->placementStones($stripedString);
        return $result;
    }
}
