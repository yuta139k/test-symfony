<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerGameScore
 *
 * @ORM\Table(name="player_game_score")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerGameScoreRepository")
 */
class PlayerGameScore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="player_id", type="integer")
     */
    private $playerId;

    /**
     * @var int
     *
     * @ORM\Column(name="game_score_id", type="integer")
     */
    private $gameScoreId;

    /**
     * @var int
     *
     * @ORM\Column(name="total_plate_apprearances", type="integer")
     */
    private $totalPlateApprearances;

    /**
     * @var int
     *
     * @ORM\Column(name="at_bats", type="integer")
     */
    private $atBats;

    /**
     * @var int
     *
     * @ORM\Column(name="runs", type="integer")
     */
    private $runs;

    /**
     * @var int
     *
     * @ORM\Column(name="hits", type="integer")
     */
    private $hits;

    /**
     * @var int
     *
     * @ORM\Column(name="doubles", type="integer")
     */
    private $doubles;

    /**
     * @var int
     *
     * @ORM\Column(name="triples", type="integer")
     */
    private $triples;

    /**
     * @var int
     *
     * @ORM\Column(name="homeruns", type="integer")
     */
    private $homeruns;

    /**
     * @var int
     *
     * @ORM\Column(name="runs_batted_in", type="integer")
     */
    private $runsBattedIn;

    /**
     * @var int
     *
     * @ORM\Column(name="stolen_bases", type="integer")
     */
    private $stolenBases;

    /**
     * @var int
     *
     * @ORM\Column(name="caught_stealing", type="integer")
     */
    private $caughtStealing;

    /**
     * @var int
     *
     * @ORM\Column(name="walks", type="integer")
     */
    private $walks;

    /**
     * @var int
     *
     * @ORM\Column(name="strikeouts", type="integer")
     */
    private $strikeouts;

    /**
     * @var float
     *
     * @ORM\Column(name="batting_average", type="float")
     */
    private $battingAverage;

    /**
     * @var float
     *
     * @ORM\Column(name="on_base_percentage", type="float")
     */
    private $onBasePercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="slugging_percentage", type="float")
     */
    private $sluggingPercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="ops", type="float")
     */
    private $ops;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set playerId
     *
     * @param integer $playerId
     *
     * @return PlayerGameScore
     */
    public function setPlayerId($playerId)
    {
        $this->playerId = $playerId;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return int
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * Set gameScoreId
     *
     * @param integer $gameScoreId
     *
     * @return PlayerGameScore
     */
    public function setGameScoreId($gameScoreId)
    {
        $this->gameScoreId = $gameScoreId;

        return $this;
    }

    /**
     * Get gameScoreId
     *
     * @return int
     */
    public function getGameScoreId()
    {
        return $this->gameScoreId;
    }

    /**
     * Set totalPlateApprearances
     *
     * @param integer $totalPlateApprearances
     *
     * @return PlayerGameScore
     */
    public function setTotalPlateApprearances($totalPlateApprearances)
    {
        $this->totalPlateApprearances = $totalPlateApprearances;

        return $this;
    }

    /**
     * Get totalPlateApprearances
     *
     * @return int
     */
    public function getTotalPlateApprearances()
    {
        return $this->totalPlateApprearances;
    }

    /**
     * Set atBats
     *
     * @param integer $atBats
     *
     * @return PlayerGameScore
     */
    public function setAtBats($atBats)
    {
        $this->atBats = $atBats;

        return $this;
    }

    /**
     * Get atBats
     *
     * @return int
     */
    public function getAtBats()
    {
        return $this->atBats;
    }

    /**
     * Set runs
     *
     * @param integer $runs
     *
     * @return PlayerGameScore
     */
    public function setRuns($runs)
    {
        $this->runs = $runs;

        return $this;
    }

    /**
     * Get runs
     *
     * @return int
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return PlayerGameScore
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return int
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set doubles
     *
     * @param integer $doubles
     *
     * @return PlayerGameScore
     */
    public function setDoubles($doubles)
    {
        $this->doubles = $doubles;

        return $this;
    }

    /**
     * Get doubles
     *
     * @return int
     */
    public function getDoubles()
    {
        return $this->doubles;
    }

    /**
     * Set triples
     *
     * @param integer $triples
     *
     * @return PlayerGameScore
     */
    public function setTriples($triples)
    {
        $this->triples = $triples;

        return $this;
    }

    /**
     * Get triples
     *
     * @return int
     */
    public function getTriples()
    {
        return $this->triples;
    }

    /**
     * Set homeruns
     *
     * @param integer $homeruns
     *
     * @return PlayerGameScore
     */
    public function setHomeruns($homeruns)
    {
        $this->homeruns = $homeruns;

        return $this;
    }

    /**
     * Get homeruns
     *
     * @return int
     */
    public function getHomeruns()
    {
        return $this->homeruns;
    }

    /**
     * Set runsBattedIn
     *
     * @param integer $runsBattedIn
     *
     * @return PlayerGameScore
     */
    public function setRunsBattedIn($runsBattedIn)
    {
        $this->runsBattedIn = $runsBattedIn;

        return $this;
    }

    /**
     * Get runsBattedIn
     *
     * @return int
     */
    public function getRunsBattedIn()
    {
        return $this->runsBattedIn;
    }

    /**
     * Set stolenBases
     *
     * @param integer $stolenBases
     *
     * @return PlayerGameScore
     */
    public function setStolenBases($stolenBases)
    {
        $this->stolenBases = $stolenBases;

        return $this;
    }

    /**
     * Get stolenBases
     *
     * @return int
     */
    public function getStolenBases()
    {
        return $this->stolenBases;
    }

    /**
     * Set caughtStealing
     *
     * @param integer $caughtStealing
     *
     * @return PlayerGameScore
     */
    public function setCaughtStealing($caughtStealing)
    {
        $this->caughtStealing = $caughtStealing;

        return $this;
    }

    /**
     * Get caughtStealing
     *
     * @return int
     */
    public function getCaughtStealing()
    {
        return $this->caughtStealing;
    }

    /**
     * Set walks
     *
     * @param integer $walks
     *
     * @return PlayerGameScore
     */
    public function setWalks($walks)
    {
        $this->walks = $walks;

        return $this;
    }

    /**
     * Get walks
     *
     * @return int
     */
    public function getWalks()
    {
        return $this->walks;
    }

    /**
     * Set strikeouts
     *
     * @param integer $strikeouts
     *
     * @return PlayerGameScore
     */
    public function setStrikeouts($strikeouts)
    {
        $this->strikeouts = $strikeouts;

        return $this;
    }

    /**
     * Get strikeouts
     *
     * @return int
     */
    public function getStrikeouts()
    {
        return $this->strikeouts;
    }

    /**
     * Set battingAverage
     *
     * @param float $battingAverage
     *
     * @return PlayerGameScore
     */
    public function setBattingAverage($battingAverage)
    {
        $this->battingAverage = $battingAverage;

        return $this;
    }

    /**
     * Get battingAverage
     *
     * @return float
     */
    public function getBattingAverage()
    {
        return $this->battingAverage;
    }

    /**
     * Set onBasePercentage
     *
     * @param float $onBasePercentage
     *
     * @return PlayerGameScore
     */
    public function setOnBasePercentage($onBasePercentage)
    {
        $this->onBasePercentage = $onBasePercentage;

        return $this;
    }

    /**
     * Get onBasePercentage
     *
     * @return float
     */
    public function getOnBasePercentage()
    {
        return $this->onBasePercentage;
    }

    /**
     * Set sluggingPercentage
     *
     * @param float $sluggingPercentage
     *
     * @return PlayerGameScore
     */
    public function setSluggingPercentage($sluggingPercentage)
    {
        $this->sluggingPercentage = $sluggingPercentage;

        return $this;
    }

    /**
     * Get sluggingPercentage
     *
     * @return float
     */
    public function getSluggingPercentage()
    {
        return $this->sluggingPercentage;
    }

    /**
     * Set ops
     *
     * @param float $ops
     *
     * @return PlayerGameScore
     */
    public function setOps($ops)
    {
        $this->ops = $ops;

        return $this;
    }

    /**
     * Get ops
     *
     * @return float
     */
    public function getOps()
    {
        return $this->ops;
    }
}
