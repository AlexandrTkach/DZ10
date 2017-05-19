<?php
$strok = 'Игра любимая моя - футбол';
$strok = revers($strok);
function revers($str1): string
{
    $ons = explode(' ', $str1);
    $ons = array_reverse($ons);
    $str1 = join(' ', $ons);
    $str1=mb_strtolower($str1);
    return $str1;
}
var_dump($strok);
