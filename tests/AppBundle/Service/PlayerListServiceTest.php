<?php

namespace AppBundle\Service;

use AppBundle\Repository\PlayerRepository;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;

class PlayerListServiceTest extends TestCase
{
    public function testGetPlayerList()
    {
        // Repository のモックを作成
        $repository = $this->prophesize(PlayerRepository::class);
        $repository->findBy(['teamId' => 1])->willReturn([1]);
        $repository = $repository->reveal();

        // EntityManager のモックを作成
        $entityManager = $this->prophesize(EntityManager::class);
        $entityManager->getRepository('AppBundle:Player')->willReturn($repository);
        $entityManager = $entityManager->reveal();

        // テスト対象の実際の値を取得
        $playerListService = new PlayerListService($entityManager);

        $actual = $playerListService->getList(1);
        $expected = [1];

        // 検証
        $this->assertEquals($expected, $actual);
    }
}
