<?php

class Worker{
    private $name, $age, $height, $deathAge;
    public $isAlive;

    /**
     * @return mixed
     */

    public function __construct($name, $age, $height){
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->deathAge = rand(60, 120);
        $this->isAlive = true;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    private function setAge($age)
    {
        $this->age = $age;
    }
    public function getHeight()
    {
        return $this->height;
    }
    private function setHeight($height)
    {
        $this->height = $height;
    }

    public function getDeathAge()
    {
        return $this->deathAge;
    }

    public function setDeathAge($deathAge)
    {
        $this->deathAge = $deathAge;
    }

    private function randomDeath(){
        if (rand(0, 20) == 20) $this->isAlive = false;
    }

    public function growUp(){
        $this->randomDeath();
        if ($this->getAge() <= 25){
            $this->setAge($this->getAge() + 1);
            $this->setHeight($this->getHeight() + 1);
        }
        else{
            if ($this->deathAge <= $this->getAge()){
                $this->isAlive = false;
            }
            $this->setAge($this->getAge() + 1);
            $this->setHeight($this->getHeight() - 1);
        }
    }
}