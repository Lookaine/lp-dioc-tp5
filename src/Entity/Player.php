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
     * @ORM\OneToMany(targetEntity="PlayerPotion", mappedBy="player", cascade={"persist"})
     */
    protected $playerPotion;

    /**
     * Player constructor.
     */
    public function __construct()
    {
        $this->playerPotion = new ArrayCollection();
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

    public function addPlayerPotion(PlayerPotion $pp){
        if($this->playerPotion->contains($pp)){
            return;
        }
        $this->playerPotion->add($pp);
        $pp->setPlayer($this);
    }

    /**
     * @param mixed $playerPotion
     */
    public function setPlayerPotions($playerPotion)
    {
        $this->playerPotion->clear();

        foreach ($playerPotion as $playerPotions){
            $this->addPlayerPotion($playerPotions);
        }
    }

    public function removePlayerPotions(PlayerPotion $playerPotion){
        $this->playerPotion->removeElement($playerPotion);
    }

    /**
     * @return mixed
     */
    public function getPlayerPotion()
    {
        return $this->playerPotion;
    }



}
