<?php

namespace SuperKits;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;

use SuperKits\commands\KitCommand;

class Main extends PluginBase {

  public function onEnable() {
    $this->getLogger()->info("SuperKits Enabled!");
    $this->setCommands();
    $this->setConfigs();
  }
  
  public function setCommands() {
    $this->getCommand("kit")->setExecutor(new KitCommand($this), $this);
  }
  
  public function setConfigs() {
    if(!(is_dir($this->getDataFolder() . "vip"))) {
      @mkdir($this->getDataFolder() . "vip");
    }
    if(!(is_dir($this->getDataFolder() . "vip+"))) {
      @mkdir($this->getDataFolder() . "vip+");
    }
  }
}
