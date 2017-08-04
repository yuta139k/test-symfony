<?php
namespace AppBundle\Service;

use AppBundle\Entity\PlayerGameScore;

class PlayerGameScoreCalculateService
{
    public function CalcBattingAverage(PlayerGameScore $playerGameScore)
    {
        $atBats = $playerGameScore->getAtBats();
        $hits = $playerGameScore->getHits();
        $battingAverage = $hits / $atBats;

        if ($battingAverage > 1) {
            throw new \InvalidArgumentException();
        }

        return round($battingAverage, 3);
    }
}
