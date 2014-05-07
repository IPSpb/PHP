<?php

function __autoload($class_name) {
    include $class_name . '.php';
}

$obj  = new Class1();
$obj1  = new Class2();
//echo $obj->getId();
//echo $obj1->getId();

class a
{
    function a($x = 1)
    {
        $this->myvar = $x;
    }
}

class b extends a
{
    var $myvar;
    function b($x = 2)
    {
        $this->myvar = $x;
        parent::a();
    }
}
$obj = new b;
echo $obj->myvar;

function foo(&$bar)
{
    $bar *= 2;
    return $bar;
}
$x = 3;
$y = foo($x);
$x = 5;
echo $x . ' ' . $y;
?>