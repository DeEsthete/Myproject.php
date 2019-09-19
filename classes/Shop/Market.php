<?php
include "./MiniMarket.php";

class Market extends MiniMarket{
    public function addItem(string $name, array $params){
        $this->items[$name] = $params;
    }
}