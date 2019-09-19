<?php
include "./SpaceObject.php";

class Planet extends SpaceObject{
    public $isWatered, $isAlived, $sunSystem;

    /**
     * @return mixed
     */
    public function getisWatered()
    {
        return $this->isWatered;
    }

    /**
     * @param mixed $isWatered
     */
    public function setIsWatered($isWatered)
    {
        $this->isWatered = $isWatered;
    }

    /**
     * @return mixed
     */
    public function getisAlived()
    {
        return $this->isAlived;
    }

    /**
     * @param mixed $isAlived
     */
    public function setIsAlived($isAlived)
    {
        $this->isAlived = $isAlived;
    }

    /**
     * @return mixed
     */
    public function getSunSystem()
    {
        return $this->sunSystem;
    }

    /**
     * @param mixed $sunSystem
     */
    public function setSunSystem($sunSystem)
    {
        $this->sunSystem = $sunSystem;
    }
}