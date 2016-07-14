<?php

namespace SuperKits;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;

use SuperKits\commands\KitCommand;

class Main extends PluginBase {

  public function onEnable() {
    $this->getLogger()->info("SuperKits Enabled!");
  }
  
  public function setCommands() {
    $this->getCommand("kit")->setExecutor(new KitCommand($this), $this);
  }
}
