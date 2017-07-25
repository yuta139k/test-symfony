<?php

// src/AppBundle/Controller/teamController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    /**
     * @Route("teams/{teamId}/players")
     */
    public function numberAction($teamId)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Player');
        $players = $repository->findBy(['teamId' => $teamId]);

        return $this->render('player.html.twig', array(
            'players' => $players,
        ));
    }
}
