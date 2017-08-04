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

    /**
     * @expectedException \InvalidArgumentException
     * @dataProvider invalidBatsAndHits
     */
    public function test打率10割以上は不正とし例外発生($bats, $hits)
    {
        $service = new PlayerGameScoreCalculateService();
        $score = new PlayerGameScore();
        $score->setAtBats($bats);
        $score->setHits($hits);

        $service->calcBattingAverage($score);
    }

    public function batsAndHits()
    {
        return [
            [3, 1, 0.333],
            [10, 2, 0.200],
        ];
    }

    public function invalidBatsAndHits()
    {
        return [
            [3, 10],
        ];
    }
}
