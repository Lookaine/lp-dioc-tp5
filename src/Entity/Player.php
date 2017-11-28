<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Iterable_;

/**
 * Class Player
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="player")
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
     * @ORM\ManyToMany(targetEntity="Potion")
     */
    protected $potions;

    /**
     * Player constructor.
     */
    public function __construct()
    {
        $this->potions = new ArrayCollection();
    }

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
     * @return Collection
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
        $this->potions->clear();

        foreach ($potions as $potion){
            $this->addPotions($potion);
        }
    }

    public function addPotions(Potion $potion){
        $this->potions->add($potion);
    }

    public function removePotions(Potion $potion){
        $this->potions->removeElement($potion);
    }

}
