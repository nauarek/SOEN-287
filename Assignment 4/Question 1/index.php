<?php

function uppercaseFirstandLast($str){
    return strrev(ucwords(strrev(ucwords(strtolower($str)))));
}

function findAverage_and_Median(array $array){
   $arrayLength = count($array); 
   $avg =  array_sum($array)/ $arrayLength;
   $median = floor($arrayLength/2);
   return $avg;
}

echo uppercaseFirstandLast("test");
echo findAverage_and_Median(array(1,2,3));

?>