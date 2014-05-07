<?php

class Circle extends Figure{

    private $radius;

    public function __construct($r)
    {
        $this->radius = (int)$r;
        $this->type = 'Круг';
    }

    public function area()
    {
        return M_PI*pow($this->radius, 2);
    }

    public function perimeter()
    {
        return 2*M_PI*$this->radius;
    }
}