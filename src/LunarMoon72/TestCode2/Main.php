<?php

declare(strict_types=1);

namespace LunarMoon72\TestCode2;

use pocketmine\plugin\PluginBase;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;

use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

	public function onEnabled(){
		$this->getLogger()->info("Plugin is Enabled");

	}

    public function onJoin(PlayerJoinEvent $event){
    	$player = $event->getPlayer();
    	$name = $player->getName();
    	$inv = $player->getInventory();

    	$this->getServer()->boradcastMessage("$name has Joined the server!");
    	$item = Item::get(345, 0 , 1);
    	$inv->setItem(0, $item);
    }

}
