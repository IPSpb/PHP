<?php

class Triangle extends Figure{

    private $a, $b, $c;

    public function __construct($a = 0, $b = 0, $c = 0)
    {
        $this->a = (int)$a;
        $this->b = (int)$b;
        $this->c = (int)$c;
        $this->type = 'Треугольник';

    }

    private  function getHalfPerimeter()
    {
        return ($this->a + $this->b + $this->c)/2;
    }

    private function getHeightTriangle()
    {
        $p = $this->getHalfPerimeter();
        if($this->a >0 && $this->b > 0 && $this->c > 0)
        {
            return 2/$this->a*sqrt($p*($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        }
        else
        {
            throw new Exception('Одна из сторон треугольника установлена не правильно');
        }
    }

    public function area()
    {
        $height = $this->getHeightTriangle();
        return ($height * $this->b)/2;
    }

    public function perimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}