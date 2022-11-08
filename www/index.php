<?php
declare(strict_types=1); // строгая типизация тайп-хинтинг (type hinting) в PHP 7

function getSum(int $x, int $y)
{
    var_dump($x);
    var_dump($y);

    return $x + $y;
}

echo getSum(12.5, 10);