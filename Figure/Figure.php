<?php
/**
 * Created by PhpStorm.
 * User: IPopov
 * Date: 05.05.14
 * Time: 17:36
 */
abstract class Figure{

    protected $type = '';

    abstract public function area();
    abstract public function perimeter();

    public function getType()
    {
        if ($this->type == '')
        {
            throw new Exception('Название фигуры не определенно в классе '.get_class($this).'!');
        }
        return $this->type;
    }
}