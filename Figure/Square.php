<?php

class Square extends Figure{

    private $length;

    public function __construct($l)
    {
        $this->length = $l;
        $this->type = 'Квадрат';
    }

    public function area()
    {
        return pow($this->length, 2);
    }

    public function perimeter()
    {
        return 4*$this->length;
    }
}