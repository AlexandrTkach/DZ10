<?php

$strok = GeneratStr(50);
echo "генерирует случайную строку" . $strok;
function GeneratStr($length = 50){
    $slova  = "absdifghxqwert ABCDIFGHXQWERTYUIOP";
    $func = strlen($slova);
    $string = ' - ';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($slova, rand(1, $func) - 1, 1);
    }
    return $string;
}
//----------------------------------------------
//2 вариант задачи

$array = array(1, 0, 6, 9, 4, 5, 2, 3, 8, 7);

for ($j = 0; $j < count($array) - 1; $j++){
    for ($i = 0; $i < count($array) - $j - 1; $i++){
        if ($array[$i] > $array[$i + 1]){
            $per = $array[$i + 1];
            $array[$i + 1] = $array[$i];
            $array[$i] = $per;
        }
    }
}
echo '<br>';
//var_dump( $array);
print_r($array);
