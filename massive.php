<?php

//$unset = "unset(\$array[\$index]) = удаляет элемент массива по индексу \n";
// count($massive) считает количество элементов;

//$animals = ['unset' => "Чтобы удалить элемента массива в PHP, нужно использовать конструкцию unset",
 //'dogs', 'test' => "enymany", null];
$cities = ['moscow', 'london', 'berlin'];
$arr = [ 1, 2, 3, 4, $cities];

function apply(array $arr, string $command, int $index = null, $newThink = null)
{
    $result = $arr;
    switch ($command) {
        case "reset":
            $result = [];
        break;
        case "remove":
            unset($result[$index]);
        break;
        case "change":
            $result[$index] = $newThink;
        break;
    }
    return $result;
}
 

//for( $i = 0; $i < count($arr); $i++) {
//    var_dump($arr[$i]);
  //  }
$dada =[];
foreach ($arr as $value){
 //   var_dump($value);
 if (!is_array($value)){
 $dada[] = $value;
 }
    if (is_array($value))
    {
        foreach($value as $item) {
            $dada[] = $item;
        }
    }
}
print_r($dada);
