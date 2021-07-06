<!--1. DATE HELL-->
<!--You are required to write a function in PHP which receives 4 string arguments: startDateTime1, endDateTime1, startDateTime2 and endDateTime2.-->
<!--All strings are in the format 'dd-mmm-yyyy hh:mm:ss' and we assume the format was validated by an upper level. Your function must return a boolean-->
<!--value (true/false) which indicates whether the 2 timeframes overlap. You can use extra functions which do simpler things to organize your work.-->
<!--E.g.: ['10-05-2021 10:00:00', '13-05-2021  00:00:00'] and ['04-04-2021 21:30:15', '11-05-2021 04:30:00'] overlap (this is just one case of overlapping,-->
<!--you must think about all the others)-->
<!--When I get your solution, I'll try to break it so make sure your function is bulletproof!-->
<?php

function dateHellCheckIfOverlap(string $startDateTime1, string $endDateTime1, string $startDateTime2, string $endDateTime2):bool
{
    $firstTwoDatesCheck = checkIfDateIsGreater($startDateTime1, $endDateTime1);
    $secondTwoDatesCheck = checkIfDateIsGreater($startDateTime2, $endDateTime2);

    if($firstTwoDatesCheck == true && $secondTwoDatesCheck == true) {
        if ($startDateTime1 >= $startDateTime2) {
            return false;
        }

        if ($endDateTime1 >= $startDateTime2) {
            return false;
        }
    }

    return true;
}

function checkIfDateIsGreater(string $start, string $end):bool
{
    if($start >= $end){
        return false;
    }
    return true;
}

$date1 = '10-05-2021 10:00:00';
$date2 = '10-05-2021 20:00:00';
$date3 = '10-05-2021 19:00:00';
$date4 = '10-05-2021 24:00:00';


$result = dateHellCheckIfOverlap($date1, $date2, $date3, $date4);
var_dump($result);



