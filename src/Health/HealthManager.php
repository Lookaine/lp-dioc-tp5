<?php
/**
 * Created by PhpStorm.
 * User: nicolas.horn
 * Date: 28/11/17
 * Time: 11:00
 */

namespace App\Health;


use App\Entity\Player;
use App\Entity\Potion;
use App\Entity\PlayerPotion;

class HealthManager
{

    /**
     * HealthManager constructor.
     */
    public function __construct($healthPoint)
    {
    }

    public function heal(Health $health){

        /**
         * @var Player $player
         */
        $player = $health->player;
        /**
         * @var Potion $potion
         */
        $potion = $health->potion;
        $count = $health->count;

        $playerPotion = null;



        /*foreach ($player->getPlayerPotion() as $pp){
            if($pp ->getPotion() == $potion){
                $playerPotion = $pp;
                continue;
            }
        }*/

        if($playerPotion->getCount() < $count){
            return;
        }
        for ($i=0; $i< $count; $i++){

        }
        $player->setHealthPoint($player->getHealthPoint() + $potion->getHealthPoint());

    }
}