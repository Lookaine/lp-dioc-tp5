<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Iterable_;

/**
 * Class PlayerPotion
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="playerPotion")
 */
class PlayerPotion
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Potion")
     */
    protected $potions;

    /**
     * @ORM\ManyToOne(targetEntity="player", inversedBy="playerPotion")
     */
    protected $player;

    /**
     * @ORM\Column(type="integer")
     */
    protected $count;

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }


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

    /**
     * @return Collection
     */
    public function getPotions()
    {
        return $this->potions;
    }

        /**
     * @return mixed
         */
    public function getPlayer()
    {
        return $this->player;
    }
    /**
     * @param mixed $player
     */
    public function setPlayer($player)
    {
        $this->player = $player;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $potions
     */
    public function setPotions($potions)
    {
        $this->potions = $potions;
    }


}
