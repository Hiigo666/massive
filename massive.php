<?php

//$unset = "unset(\$array[\$index]) = удаляет элемент массива по индексу \n";
// count($massive) считает количество элементов;

//$animals = ['unset' => "Чтобы удалить элемента массива в PHP, нужно использовать конструкцию unset",
 //'dogs', 'test' => "enymany", null];
$cities = ['moscow', 'london', 'berlin', 'porto'];

function apply(array $arr, string $command, int $index, $newThink)
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
    }
}
 




