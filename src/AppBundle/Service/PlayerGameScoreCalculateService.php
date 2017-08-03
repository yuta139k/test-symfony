<?php
namespace AppBundle\Service;

use AppBundle\Entity\PlayerGameScore;

class PlayerGameScoreCalculateService
{
    public function CalcBattingAverage(PlayerGameScore $playerGameScore)
    {
        $atBats = $playerGameScore->getAtBats();
        $hits = $playerGameScore->getHits();

        return round($hits / $atBats, 3);
    }
}
