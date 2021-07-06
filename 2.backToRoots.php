<!--You are given a text file called 'numbers.txt' which contains a series of digits (0-9), -->
<!--separated by a space character. The file may contain tons of numbers. Write a function that -->
<!--outputs, in ascending order, all the digits that are present in this file. Easy, right? Just -->
<!--one second, our client hates arrays AND stringand told the PHP guys to remove the array and -->
<!--string concepts from the language and you are forced to obey her wishes.-->
<!--First thought: Why would I ever want to work for such a client?-->
<!--Second thought: It's a challenge and I'm a programmer and I MUST love challenges. So let's do this!-->
<!--E.g. File contains 8 8 1 3 8 4 0 0 0 0 0 0 0 0 0 0 8-->
<!--Output: 0 1 3 4 8-->
<?php

echo 'Numbers </br>';


function displayNumbers($filename): void
{
    $zero=$one=$two=$tree=$four=$five=$six=$seven=$eight=$nine= false;

    $file = fopen($filename, "r");

    if ($file) {
        while (($buffer = fgetc($file)) != false) {
            $buffer = (int)$buffer;

            if($buffer == 0){
                $zero = true;
            }

            if($buffer == 1){
                $one = true;
            }

            if($buffer == 2){
                $two = true;
            }

            if($buffer == 3){
                $tree = true;
            }

            if($buffer == 4){
                $four = true;
            }

            if($buffer == 5){
                $five = true;
            }

            if($buffer == 6){
                $six = true;
            }

            if($buffer == 7){
                $seven = true;
            }

            if($buffer == 8){
                $eight = true;
            }

            if($buffer == 9){
                $nine = true;
            }

        }
    }

    if($zero){
        echo 0 . chr(32);
    }

    if($one){
        echo 1 . chr(32);
    }

    if($two){
        echo 2 . chr(32);
    }

    if($tree){
        echo 3 . chr(32);
    }

    if($four){
        echo 4 . chr(32);
    }

    if($five){
        echo 5 . chr(32);
    }

    if($six){
        echo 6 . chr(32);
    }

    if($seven){
        echo 7 . chr(32);
    }

    if($eight){
        echo 8 . chr(32);
    }

    if($nine){
        echo 9 . chr(32);
    }

}

displayNumbers("numbers.txt");

