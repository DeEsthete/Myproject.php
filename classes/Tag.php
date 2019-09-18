<?php

class Tag{

    private $name, $isClosing, $body, $attrs = [], $final = "";

    public function __construct($name, $isClosing)
    {
        $this->name = $name;
        $this->isClosing = $isClosing;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getisClosing()
    {
        return $this->isClosing;
    }

    /**
     * @param mixed $isClosing
     */
    public function setIsClosing($isClosing)
    {
        $this->isClosing = $isClosing;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getAttrs()
    {
        return $this->attrs;
    }

    public function setAttrs($attrs)
    {
        $this->attrs = $attrs;
    }

    public function addAttrs($attrs)
    {
        $this->attrs = array_merge($this->attrs, $attrs);
    }

    public function addAttr($attr){
        $this->attrs[] = $attr;
    }

    public function getString(){
        $this->final .= "<";
        $this->final .= $this->name;
        $this->final .= " ";
        foreach (array_keys($this->attrs) as $i){
            $this->final .= $i;
            $this->final .= "=\"";
            $this->final .= $this->attrs[$i];
            $this->final .= "\"";
        }
        if ($this->isClosing){
            $this->final .= ">";
            $this->final .= $this->body;
            $this->final .= "<";
            $this->final .= $this->name;
            $this->final .= "/>";
        }
        else{
            $this->final .= "/>";
        }
        return $this->final;
    }
}