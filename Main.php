<?php

namespace PlaceEvent;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
class Main extends PluginBase implements Listener{
	public function onLoad(){
		$this->getLogger()->info("§b플러그인이 로드되었어요!");
	}
	public function onEnable(){
		$this->getLogger()->info("§b플러그인이 활성화되었어요!");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onDisable(){
		$this->getLogger()->info("§c플러그인이 비활성화 되었어요!");
	}
}
?>