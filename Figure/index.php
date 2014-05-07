<?php

function __autoload($class_name) {
    include $class_name . '.php';
}
$figures = array();
if ($fp = fopen(__DIR__.'/text.txt', 'r'))
{
    while (!feof($fp))
    {
        $line = fgets($fp);
        $lineArray = explode(';', trim($line));
        switch($lineArray[0]){
            case 'Triangle':
                if(class_exists($lineArray[0]))
                {
                    $figures[] = new $lineArray[0]($lineArray[1], $lineArray[2], $lineArray[3]);
                }
                break;
            case 'Circle':
                if(class_exists($lineArray[0]))
                {
                    $figures[] = new $lineArray[0]($lineArray[1]);
                }
                break;
            case 'Square':
                if(class_exists($lineArray[0]))
                {
                    $figures[] = new $lineArray[0]($lineArray[1]);
                }
                break;
        }
    }
}
foreach($figures as $figure)
{
    echo 'Фигура '.$figure->getType().': Площадь = '.$figure->area().', Периметр = '.$figure->perimeter().'<br />';
}
//$triangle = new Triangle(10, 12, 13);
//echo $triangle->area();
