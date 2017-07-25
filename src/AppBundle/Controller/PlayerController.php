<?php

// src/AppBundle/Controller/teamController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    /**
     * @Route("/players")
     */
    public function numberAction()
    {
        $repository = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Player');
        $players = $repository->findAll();

        return $this->render('player.html.twig', array(
            'players' => $players,
        ));
    }
}
