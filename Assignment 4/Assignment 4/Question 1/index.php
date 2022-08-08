<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <div style="width:100%; text-align:center; padding-top:50px">
    <b>Exercise 1</b>
        <br><br>
        <?php

function uppercaseFirstandLast($str){
    return strrev(ucwords(strrev(ucwords(strtolower($str)))));
}

function findAverage_and_Median(array $array){
   $arrayLength = count($array); 
   $avg =  array_sum($array)/ $arrayLength;
   $median = $array[$arrayLength/2];
   return array($avg,$median);
}
 print "Here is the function upper case First and Last on the word: test";
 print "<br>";
 echo uppercaseFirstandLast("test");
 print "<br>";
 print  "Here is the function find Average and Median with the array (1,5,7)";
 print "<br>";

 $avg_median = findAverage_and_Median(array(1,5,7));
 print "Average: ";
 echo($avg_median[0]);
 print "<br>";
 print "Median: ";
 echo($avg_median[1]);

?>
    </div>
    
</body>
</html>







