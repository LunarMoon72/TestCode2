<?php

declare(strict_types=1);

namespace LunarMoon72\TestCode2;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener{
    public function onEnabled(){
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info("Plugin is Enabled");

    }

    public function onJoin(PlayerJoinEvent, $event){
       $player = $event->getPlayer();
       $name = $player->getName();

       $this->getServer()->broadcastMessage(TextFormat::GREEN."$name has joined!");
    }
    
}
