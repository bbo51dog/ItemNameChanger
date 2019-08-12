<?php

namespace bboyyu51\itemname;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public function onEnable(){
        $this->getServer()->getCommandMap()->register("iname", new INameCommand());
    }
}