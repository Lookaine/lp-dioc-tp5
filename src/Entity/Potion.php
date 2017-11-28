<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Potion
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="potion")
 */
class Potion
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
    protected $limited;

    /**
     * @ORM\Column(type="integer")
     */
    protected $healthPoint;

    /**
     * Potion constructor.
     * @param $name
     * @param $limited
     * @param $healthPoint
     */
    public function __construct(string $name, int $limited, int $healthPoint)
    {
        $this->name = $name;
        $this->limited = $limited;
        $this->healthPoint = $healthPoint;
    }

    /**
     * @return mixed
     */
    public function getLimited()
    {
        return $this->limited;
    }

    /**
     * @param mixed $limited
     */
    public function setLimited($limited)
    {
        $this->limited = $limited;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


    /**
     * @return mixed
     */
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    /**
     * @param mixed $healthPoint
     */
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }



}
