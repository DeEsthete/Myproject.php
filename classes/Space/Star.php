<?php
include "./SpaceObject.php";

class Star extends SpaceObject{
    public $isCold, $diameter;

    public function toSuperNova(){}

    public function getisCold()
    {
        return $this->isCold;
    }

    public function setIsCold($isCold)
    {
        $this->isCold = $isCold;
    }

    public function getDiameter()
    {
        return $this->diameter;
    }

    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }
}