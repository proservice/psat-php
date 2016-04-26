<?php namespace Psat\Solid;

class AreaCalculator {

    protected $shapes;

    public function __construct($shapes = array()) {
        $this->shapes = $shapes;
    }

    public function sum() {
        foreach($this->shapes as $shape) {
            if(!is_a($shape, '\Psat\Solid\Shape')) {
                throw new \Exception('Bad argument');
            }
            
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}