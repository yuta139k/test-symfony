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
        $number = mt_rand(0, 100);

        return $this->render('team.html.twig', array(
            'number' => $number,
        ));
    }
}
