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

class SetVipCommand extends PluginBase() {
  
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
    if($sender->isOp()) {
      switch($command->getName()) {
        case "vip":
          if(!(isset($args[0]))) {
            $sender->sendMessage(TF::RED . "Usage: /vip <add|remove> <name>");
          }
          if(isset($args[0])) {
            if($args[0] == "add") {
              $player = $this->getServer()->getPlayer($args[1]);
              $vip->set($player, "vip");
              $sender->sendMessage(TF::GREEN . $player . " is now added to the vip list!");
            } elseif($args[0] == "remove") {
              $player = $this->getServer()->getPlayer($args[1]);
              $vip->set($player, null);
              $sender->sendMessage(TF::BLUE . $player . " has now been removed from vip list!");
            }
            $config->save();
            $config->reload();
          }
          break;
      }
    }
  }
}
