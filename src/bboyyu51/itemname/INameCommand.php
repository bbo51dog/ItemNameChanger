<?php

namespace bboyyu51\itemname;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class INameCommand extends Command{
    public function __construct(){
        parent::__construct("iname", "Change Item Name Command", "/iname <ItemName>");
        $this->setPermission("iname");
    }
    
    public function execute(CommandSender $sender, string $commandLabel, array $args){
        if(!$sender instanceof Player){
            $sender->sendMessage("サーバー内で使用してください");
            return;
        }
        if(empty($args[0])){
            $sender->sendMessage("Usage:".$this->getUsage());
            return;
        }
        $item = $sender->getInventory()->getItemInHand();
        $item->setCustomName($args[0]);
        $sender->getInventory()->setItemInHand($item);
        $sender->sendMessage("アイテム名を".$args[0]."に変更しました");
    }
}