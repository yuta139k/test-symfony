<?php

// src/AppBundle/Controller/teamController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class PlayerController
 * @package AppBundle\Controller
 */
class PlayerController extends Controller
{
    /**
     * @Route("teams/{teamId}/players")
     */
    public function numberAction($teamId)
    {
        $players = $this->get('app.player_list')->getList($teamId);

        return $this->render('player.html.twig', array(
            'players' => $players,
        ));
    }
}
