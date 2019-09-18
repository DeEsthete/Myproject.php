<?php

class MyClass{

    private $myVar;

    public function getVar(){ return $this->myVar; }
    public function setVar($newVar){ $this->myVar = $newVar; }

    public function myAction(){
        echo "Ok";
    }
}