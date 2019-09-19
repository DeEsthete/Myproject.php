<?php
include "./SpaceObject.php";

class Meteor extends SpaceObject{
    public $sunSystem, $isOred;

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

    /**
     * @return mixed
     */
    public function getisOred()
    {
        return $this->isOred;
    }

    /**
     * @param mixed $isOred
     */
    public function setIsOred($isOred)
    {
        $this->isOred = $isOred;
    }
}