<?php namespace Psat\Solid;

class Circle implements Shape{
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius, 2);
    }
}
