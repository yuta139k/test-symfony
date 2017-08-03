<?php

namespace AppBundle\Service;

use AppBundle\Entity\PlayerGameScore;
use PHPUnit\Framework\TestCase;

class PlayerGameScoreCalculateServiceTest extends TestCase
{
    public function test打率が計算できる()
    {
        $service = new PlayerGameScoreCalculateService();
        $score = new PlayerGameScore();
        $score->setAtBats(10);
        $score->setHits(2);

        $this->assertSame(0.200, $service->calcBattingAverage($score));
    }

    public function test小数点第三位以下の打率は四捨五入()
    {
        $service = new PlayerGameScoreCalculateService();
        $score = new PlayerGameScore();
        $score->setAtBats(3);
        $score->setHits(1);

        $this->assertSame(0.333, $service->calcBattingAverage($score));
    }
}
