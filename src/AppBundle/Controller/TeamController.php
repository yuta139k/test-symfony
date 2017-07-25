<?php

// src/AppBundle/Controller/teamController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    /**
     * @Route("/team")
     */
    public function numberAction()
    {
        $players = [
            ['id' => 1, 'name' => 'test', 'number' => '6'],
            ['id' => 2, 'name' => 'ikeyan', 'number' => '66'],
            ['id' => 3, 'name' => 'setayan', 'number' => '99'],
        ];
        return $this->render('team.html.twig', array(
            'players' => $players,
        ));
    }
}
