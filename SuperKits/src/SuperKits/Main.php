<?php

namespace SuperKits;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;

class Main extends PluginBase {

  public function onEnable() {
    $this->getLogger()->info("SuperKits Enabled!");
  }
}
