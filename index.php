<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 24.02.2017
 * Time: 11:22
 */

// Задание #1
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #1</h2>";


$name="Максим";
$age=33;
echo "Меня зовут: $name<br>";
echo "Мне $age года<br>";
//print_r "\"\!\|\\\/\’\”";
echo "\"!|\/\'\"\\";

// Задание #2
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #2</h2>";

$sum=80;
$marker=23;
$pen=40;

echo "$paint";
echo "На школьной выставке $sum рисунков.<br>";
echo "$marker из них выполнены фломастерами, $pen карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?<br>";
$paint=$sum-$marker-$pen;
echo "Рисунков, выполненные красками:   $sum - $marker - $pen = <strong>$paint</strong>";

// Задание #3
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #3</h2>";

define("pi", "3.14", true);
echo "Константе PI присвоено значение:<br>";
echo PI.'<br>';


if (defined('PI')){
    echo "Константа существует<br>";
} else { echo "Константа не существует<br>";}

echo "Попытка сменить значение переменной<br>";
define('pi', "asx", true);

echo PI.'<br>';
echo "Значение константы не изменилось";



// Задание #4
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #4</h2>";


$age=rand(0, 100);
echo $age;


if ($age>=18 and $age<65){
    echo "<h4>Вам   еще работать   и   работать</h4>";
} elseif ($age>=65){
    echo "<h4>Вам   пора   на   пенсию</h4>";
} elseif ($age<18 and $age>=1){echo "<h4>Вам   ещё   рано   работать</h4>";
} else {echo "<h4>Неизвестный   возраст</h4>";}

//Задание #5
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #5</h2>";
$day=rand(1,10);
echo $day."<br>";

switch ($day){
    case 1: echo "Это рабочий день";
        break;
    case 2: echo "Это рабочий день";
        break;
    case 3: echo "Это рабочий день";
        break;
    case 4: echo "Это рабочий день";
        break;
    case 5: echo "Это рабочий день";
        break;
    case 6: echo "Это выходной день";
        break;
    case 7: echo "Это выходной день";
        break;
    default: echo "Это неизвестный день";
        break;


}

//Задание #6
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #6</h2>";

$bmw=['model'=>'X5', 'speed'=>'120', 'doors'=>'5', 'years'=>'2005'];
$toyota=['model'=>'Corolla', 'speed'=>'100', 'doors'=>'4', 'years'=>'2006'];
$opel=['model'=>'Astra', 'speed'=>'110', 'doors'=>'3', 'years'=>'2004'];

$CAR=[$bmw, $toyota, $opel];



echo "CAR BMW:<br>";

print_r($CAR[0]["model"]." : ".$CAR[0]["speed"]." : ".$CAR[0]["doors"]." : ".$CAR[0]["years"]);

echo "<br><br>CAR TOYOTA:<br>";

print_r($CAR[1]["model"]." : ".$CAR[1]["speed"]." : ".$CAR[1]["doors"]." : ".$CAR[1]["years"]);

echo "<br><br>CAR TOYOTA:<br>";

print_r($CAR[2]["model"]." : ".$CAR[2]["speed"]." : ".$CAR[2]["doors"]." : ".$CAR[2]["years"]);



//Задание #7
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #7</h2>";
echo "<pre></pre><table width='100%' cols='10'>";
for ($i=1; $i<=10; $i++){
    echo "<tr>";
    for ($j=1; $j<=10; $j++){
        if ($i%2 == 0 and $j%2 == 0){
            echo "<td>(".$i*$j.")</td>";
        } elseif ($i%2 == 1 and $j%2 == 1){
            echo "<td>[".$i*$j."]</td>";
        } else { echo "<td>".$i*$j."</td>";}

    }
    echo "</tr>";
}
echo "</table>";



//Задание #8
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
echo "<h2>Задание #8</h2>";

$str="Создайте переменную \$str, которой присвойте строковое значение, содержащее отдельные слова разделённые пробелом. Выведите строку на экран.";
echo $str;

$arr= explode(" ", $str);
echo "<pre>";
print_r($arr);

//$newArr=array_reverse($arr);
//$k=count($arr)
//while ($k>0){
//    $newArr[key]
//
//}
  $end = end($arr);
  While ($end)
  {
      echo $end.'_';
      $end = prev($arr);
  }

//Затем используя циклы while или do-while (на ваше усмотрение) развернуть массив и склеить в строку используя любой символ, кроме пробела.
//Вывести результат.
