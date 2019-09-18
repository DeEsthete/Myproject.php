<?php

class Number
{
    private $num;

    public function __construct($num = null){
        $this->num = $num;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num = $num;
    }

    public function add($b){
        $this->num += $b;
        return $this;
    }

    public function sub($b){
        $this->num -= $b;
        return $this;
    }

    public function mult($b){
        $this->num *= $b;
        return $this;
    }

    public function div($b){
        $this->num /= $b;
        return $this;
    }
}