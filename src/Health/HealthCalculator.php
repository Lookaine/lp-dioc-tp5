<?php
/**
 * Created by PhpStorm.
 * User: nicolas.horn
 * Date: 28/11/17
 * Time: 11:12
 */

namespace App\Health;


use App\Entity\Player;
use App\Entity\Potion;

class HealthCalculator
{

    public function heal(Player $player, Potion $potion){
        $healthPoint = $player->getHealthPoint();

        if($healthPoint > $potion->getLimited()){
            return null;
        }

        if($healthPoint + $potion->getHealthPoint() > $potion->getLimited()){
            return $potion->getLimited();
        }
        return $healthPoint;
    }
}