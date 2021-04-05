<?php

namespace App\DataFixtures\Main;

use App\Entity\Main\Tenant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TenantFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $prefix = 'multitenancy_';

        $tenant = new Tenant();
        $tenant
            ->setName('Fist Tenant')
            ->setDbname($prefix.'tenant1')
            ->setDbUser('root')
            ->setDbpassword('Doorkibs1984$')
        ;
        $manager->persist($tenant);

        $tenant = new Tenant();
        $tenant
            ->setName('Second Tenant')
            ->setDbname($prefix.'tenant2')
            ->setDbUser('root')
            ->setDbpassword('Doorkibs1984$')
        ;
        $manager->persist($tenant);

        $manager->flush();
    }
}