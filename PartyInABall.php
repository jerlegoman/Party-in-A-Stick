<?php
/*
__PocketMine Plugin__
name=TOspawn
version=1.0
apiversion=12
author=Jerlegoman
class=Magic
*/
class Magic implements Plugin {
private $api;
public function __construct(ServerAPI $api,$server = false) {
$this->api = $api;
}
public function init() {
$this->api->addHandler("player.action", array($this, "eventHandle"), 50);
}
public function eventHandle($data, $event) {
switch ($event) {
case "player.action":
$player = $data["player"];
$item = $player->getSlot($player->slot);
if($item->getid()==344){
$player->entity->dropItem("264")
}
}
}
public function __destruct() {}
}
