<?php namespace Psat\Solid;

class Square implements Shape {
    protected $length;

    public function __construct($length) {
        $this->length = $length;
    }

    public function area()
    {
        return pow($this->length, 2);
    }
}

