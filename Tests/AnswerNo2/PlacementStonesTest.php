<?php

namespace Tests\AnswerNo2;

use PHPUnit\Framework\TestCase;
use AnswerNo2\PlacementStones;

require_once __DIR__ . '/../../Answers/AnswerNo2/PlacementStones.php';

class PlacementStonesTest extends TestCase
{
    private $placementStones;

    protected function setUp(): void
    {
        $this->placementStones = new PlacementStones();
    }

    public function testMainWithInvalidInput()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約>R or L');
        $this->placementStones->main(['LLLLS']);
    }

    public function testMainWithTooLongInput()
    {
        $longInput = str_repeat('R', 1000001);
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('error:<制約> inputの長さは 1 以上 10（6乗） 以下');
        $this->placementStones->main([$longInput]);
    }

    public function testMain()
    {
        $this->assertEquals(['w', 'w', 'w', 'w','w','w'], $this->placementStones->main(['RRLL']));
        $this->assertEquals(['w', 'w', 'w', 'w','w','w','b','b','b'], $this->placementStones->main(['LLRLRLR']));
        $this->assertEquals(['b','b','b','w', 'w', 'w'], $this->placementStones->main(['LRLR']));
        $this->assertEquals(['b','b','b','b','b','b', 'b'], $this->placementStones->main(['RRRRR']));
    }
}
