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

        $this->assertEquals('0.200', $service->calcBattingAverage($score));
    }
}
