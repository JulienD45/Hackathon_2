<?php

namespace App\DataFixtures;

use App\Entity\Service;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ServiceFixtures extends Fixture
{
    const CONST_SERVICE = [
        'Sensibilisation/Formations',
        'Mise en relation',
        'Suivi personnalisé',
        'Evenements',
    ];

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 4; $i++) {
            $service = new Service();
            $service->setName(self::CONST_SERVICE[$i]);
            $manager->persist($service);
            $this->addReference('service_' . $i, $service);
        }

        $manager->flush();
    }
}
