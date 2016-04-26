<?php namespace Psat\Solid;

class Triangle implements Shape {
    protected $height;
    protected $base;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return  (0.5 * $this->base) * $this->height;
    }
}