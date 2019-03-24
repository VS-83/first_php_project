<?php
$name = 'Bob'; // task 1 a
$age = 20;     // task 1 a
    echo "Hello $name You are $age years old" . PHP_EOL; // task 1 b
        echo '<br/>';
    echo 'Hello Bob you are 20 years old';  //task 1 b
        echo '<br/>';
$x = (int)10;  //task 2 a
$y  = (float)13.5; //task 2 a
$sum = $x + $y;  //task 2 b c
    echo "The sum of $x and $y is $sum"; //task 2 d

      const STRING_SIMPLE = 'This is constant';  //task 3 a
        const IN_DECIMA = 100;
          const FL_DECIMA = 14.1;
        echo '<br/>';
    echo FL_DECIMA;
        echo '<br/>';
    echo IN_DECIMA;
        echo '<br/>';
    echo STRING_SIMPLE;    //task 3 b
        echo '<br/>';

$name = 'Vasiliy';   //task 4
$admin = $name;
    echo $admin;
    ////////////////////////////
$third_planet = 'earth';  //task 5 a
$next_vizitor = 'Petya';  //task 5 b
        echo '<br/>';
//$a = 2; //task 6
//$x = 1 + (a *= 2); //х не будет равен нечему, выражение в скобках не выполнится.
$target = 55;   //task 7 a
    if ($target == 55 ) {
        echo "corectly"; //variable equals $target
            echo '<br/>';
        } else echo "is not corectly";
    echo '<br/>';
$target = 55;  //task 7 b
if ($target === 55 ) {
    echo "corectly"; //variable equals $target
        echo '<br/>';
} else echo "is not corectly";
    echo '<br/>';

$lowTarget = 5;   //task 7 c
    if ($lowTarget <= 5){
        echo "меньше или равно 5";
            echo '<br/>';
    }else echo "is not corectly";

$minute = 30;   // task number 7 d
    if ($minute <= 15){
        echo "$minute попала в первую четверть часа";
    }elseif ($minute <= 30 && $minute > 15){
        echo "$minute попадает во вторую четверть";
    }elseif ($minute <= 45 && $minute > 30){
        echo "$minute попадает в 3 четверть";
    }elseif ($minute <= 60 && $minute > 45) {
        echo "$minute попадает в 4 четверть";
    }else echo "error";
        echo '<br/>';
$X = 2;  //task 7 e
$Y = 2;
    if ($X <= 3 || $X > 10 && $Y >= 2 && $Y < 24){
        echo "it is true";
    }else echo "it is false";
        echo '<br/>';

$string = ['1','2','1','1','1']; //task 7 f
$num = (int) $string;
    if ($string[0]+$string[1] === $string[2]+$string[3]+$string[4]){
        echo 'True';
    }else echo 'False';
        echo '<br/>';

$language = 'en_GB'; //task 8
$mounts = 0;

$moEng = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul','aug', 'sep', 'oct', 'nov', 'dec' ];
$moRus = ['янв','фев','мар','апр','май','июн','июл','ауг','сен','окт','ноя','дек'];

    if ($language == 'en_GB'){
        $mounts = $moEng;
    }
        if ($language == 'ru_RU'){
            $mounts = $moRus;
        }
print_r($mounts);

        echo '<br/>';

$language = 'ru_RU';
$mounts = 0;

$moEng = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul','aug', 'sep', 'oct', 'nov', 'dec' ];
$moRus = ['янв','фев','мар','апр','май','июн','июл','ауг','сен','окт','ноя','дек'];

switch ($language) {
    case "en_GB":
        $mounts = $moEng;
        break;
    case "ru_RU":
        $mounts = $moRus;
        break;
}
print_r($mounts);
            echo '<br/>';



