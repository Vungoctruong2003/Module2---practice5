<?php

class Circle
{
public $color;
public $radius;
function __construct($color,$radius){
    $this->color = $color;
    $this->radius = $radius;
}

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function getArea(){
        return pow($this->radius,2) * pi();
    }
    public function getPerimeter(){
        return ($this->radius*2)*pi();
    }
    public function toString(){
        return "mau sac: ".$this->getColor()." ban kinh: ".$this->getRadius()." dien tich: ".$this->getArea()." chu vi: ".$this->getPerimeter();
    }
}