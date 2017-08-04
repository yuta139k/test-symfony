<?php
namespace AppBundle\Service;

use AppBundle\Entity\PlayerGameScore;

class PlayerGameScoreCalculateService
{
    public function CalcBattingAverage(PlayerGameScore $playerGameScore)
    {
        $atBats = $playerGameScore->getAtBats();
        $hits = $playerGameScore->getHits();
        if ($hits / $atBats > 1) {
            throw new \InvalidArgumentException();
        }

        return round($hits / $atBats, 3);
    }
}
