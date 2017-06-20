<?php

namespace baka\pickaxe\default;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class DefaultPlugin extends PluginBase implements Listener {
  static $obj = null;
  
  public static function getInstance() {
    return self::$obj;
  }
  
  public function onLoad() {
    self::$obj = $this;
  }
  
  public function onEnable() {
  }
}
