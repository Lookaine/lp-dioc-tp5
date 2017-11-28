<?php

namespace App\DataFixtures\ORM;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class LoadPotion extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $potions = [
            new Potion("Potion noob",10,10),
            new Potion("Potion casu",50,50),
            new Potion("Potion pgm",100,100),
        ];

        foreach ($potions as $potion) {
            $this->addReference($potion->getName(), $potion);
            $manager->persist($potion);
        }

        $manager->flush();
    }

}
