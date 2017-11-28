<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Player
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column()
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $healthPoint = 100;

    /**
     * @ORM\ManyToOne(targetEntity="Weapon")
     */
    protected $currentWeapon;

    /**
     * @ORM\ManyToOne(targetEntity="Potion")
     */
    protected $potions;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(int $healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }

    public function getCurrentWeapon(): ?Weapon
    {
        return $this->currentWeapon;
    }

    public function setCurrentWeapon(?Weapon $currentWeapon)
    {
        $this->currentWeapon = $currentWeapon;
    }

    /**
     * @return mixed
     */
    public function getPotions()
    {
        return $this->potions;
    }

    /**
     * @param mixed $potions
     */
    public function setPotions($potions)
    {
        $this->potions = $potions;
    }


}
