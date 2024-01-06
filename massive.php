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
//print_r($dada);

$someNumbers = [3, 4, 7, 1, 5, 9];

function bubbleSort(array $arr)
{
    for($limit = count($arr)-1; $limit > 0; $limit -= 1) {
        for($i = 0; $i < $limit; $i++) {
            if($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
            }
        }
    }
    return($arr);
}
$test = bubbleSort($someNumbers);

print_r($test);
