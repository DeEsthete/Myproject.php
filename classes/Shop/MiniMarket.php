<?php
include "./Shop.php";

class MiniMarket extends Shop{
    public function hasItem($key){
        return array_key_exists($key, $this->items);
    }
}