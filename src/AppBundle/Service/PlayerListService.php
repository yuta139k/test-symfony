<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class PlayerListService
{
    private $repository;

    public function __construct(EntityManager $entityManager)
    {
        $this->repository = $entityManager->getRepository('AppBundle:Player');
    }

    public function getList($teamId)
    {
        $players = $this->repository->findBy(['teamId' => $teamId]);

        return $players;
    }
}
