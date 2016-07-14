<?php

namespace SuperKits\commands;

use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as TF;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;

use SuperKits\Main;

class KitCommand extends PluginBase() {
  
  /** @var Main */
  private $plugin;
  
  /** @return Main */
  public function __construct(Main $plugin) {
    $this->plugin = $plugin;
  }
  
  /** @return Plugin */
  public function getPlugin() {
    return $this->plugin;
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    $name = $sender->getName();
    $vip = new Config($this->plugin->getDataFolder() . "vip/vip.json", Config::JSON);
    $vip+ = new Config($this->plugin->getDataFolder() . "vip+/vip+.json", Config::JSON);
    switch($command->getName()) {
      case "kit":
        if(!(isset($args[0]))) {
          $sender->sendMessage(TF::RED . "Usage: /kit select <starter|warrior|knight|hunter");
        }
        if(isset($args[0])) {
          if($args[0] == "select") {
            //TODO: Kits
          }
        }
        break;
    }
  }
}
