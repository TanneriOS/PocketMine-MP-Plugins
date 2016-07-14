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
    
  }
}
