<?php

namespace AppBundle\Service;

use AppBundle\Entity\PlayerGameScore;
use PHPUnit\Framework\TestCase;

class PlayerGameScoreCalculateServiceTest extends TestCase
{
    /**
     * @dataProvider batsAndHits
     */
    public function test小数点第三位以下の打率は四捨五入($bats, $hits, $expected)
    {
        $service = new PlayerGameScoreCalculateService();
        $score = new PlayerGameScore();
        $score->setAtBats($bats);
        $score->setHits($hits);

        $this->assertSame($expected, $service->calcBattingAverage($score));
    }

    public function batsAndHits()
    {
        return [
            [3, 1, 0.333],
            [10, 2, 0.200],
        ];
    }
}
