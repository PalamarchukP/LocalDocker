<?php

//1
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and one cocktail to the girl at that table:)";

echo"\nYour order is:$very_bad_unclear_name."."<br>";
echo "<br>";

//2
$number1 = 10;
echo $number1."<br>";
$number2 = 6;
echo $number2."<br>";
$number3 = 12.5;
echo $number3."<br>";
echo ($number1 + 2)."<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month-$this_month)."<br>";
echo "<br>";


//3
$numLanguages = 4;
$months = 11;
$productive_days = 16;
$days_per_language = ($months * $productive_days) / $numLanguages;
echo "$days_per_language"."<br>";
echo "<br>";


//4
echo (8 ** 2)."<br>";
echo "<br>";


//5
$my_num = 2;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer."<br>";
echo "<br>";


//6
$a=10;
$b=3;
echo $a % $b."<br>";
$remainder = $a % $b;
if ($remainder == 0)
    echo "Делится:", $a/$b;
else
    echo "Делится с остатком: ", $remainder ."<br>";;

echo "<br>";

$st = pow(2,10);
echo $st. "<br>";
echo sqrt(245)."<br>";

echo "<br>";

$array1 = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array1 as $a)
    $sum += pow($a,2);
echo sqrt($sum)."<br>";

echo "<br>";

echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";

echo "<br>";

$array2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $array2['ceil']."<br>";
echo $array2['floor']."<br>";

echo "<br>";

echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br>";

echo "<br>";

echo rand(1, 100)."<br>";

$array3 = [10];
for ($i=0; $i<10; $i++)
{
    $array[$i] = rand(1,100);
    echo $array[$i].",";
}

echo "<br>".abs(($b - $a))."<br>";

echo "<br>";

$numbers = [1, 2, -1, -2, 3, -3];
foreach ($numbers as $a) {
    $a = abs($a);
    echo $a.",";
}

echo "<br>";
echo "omg". "<br>";
$n = 30;
$Div = [];
for ($i=1; $i<$n; $i++)
     if ($n % $i == 0)
         $Div[] = $i;
print_r($Div);
echo "<br>";

$numm = [1,2,3,4,5,6,7,8,9,10];
$s = 0;
foreach ($numm as $a) {
    $s += $a;
    if ($s>10)
    {
        echo "<br>".$a. "<br>";
        break;
    }
}      

echo "<br>";

//7
function printStringReturnNumber()
{
    echo " Did the girl at that table like the my cocktail? Answer: ";
    return 1;
}

$my_num = printStringReturnNumber();
echo $my_num."<br>";

echo "<br>";


//8
function increaseEnthusiasm(string $str):string
{
    $str.='!';
    return $str;
}

echo increaseEnthusiasm("Wow, I'm so happy");
echo "<br>";

function repeatThreeTimes(string $str):string
{
    return $str . $str . $str;
}
echo increaseEnthusiasm(repeatThreeTimes("yes ")). "<br>";
;
echo "<br>";


function cut(string $str, int $num = 10){
    return substr($str, 0, $num);
}
echo cut("ur lucky)))))))))");
echo "<br>";


function recursive($A, $a)
{
    if ($a < sizeof($A))
    {
        echo $A[$a]." ";
        recursive($A, $a+1);
    }
}
$A = array(24, 62, 329, 67, 89, 11, 567, 356, 34);
recursive($A, 0);
echo "<br>";



function Sum($a)
{
    $a = str_split($a);
    $s = 0;
    for($i=0;$i<count($a);$i++) {
        $s += $a[$i];
    }
    if ($s > 9)
    {
        return Sum($s);
    }
    else
        return $s;
}
echo Sum(800)."<br>";
echo "<br>";



//9
$A = [];
$k = 1;
$n = 9;

echo "Наглядно: ", "<br>";
for ($i=1;$i<=$n;$i++)
{
    $a = str_repeat('x', $k);
    echo $a."<br>";
    $k += 1;
    $A[$i] = $a;
}
print_r($A);
echo "<br>";

function arrayFill($value, int $n)
{
    echo "<br>";
    echo "Наглядно: ", "<br>";
    $k = 1;
    $A = [];
    for ($i=1;$i<=$n;$i++)
    {
        $a = str_repeat($value, $k);
        $k += 1;
        $A[$i] = $a;
        echo $a."<br>";
    }
    return $A;
}
print_r(arrayFill('x', 5));
echo "<br>";

$B = [[1,2,3],[4,5],[6], [1,2,3]];
$sum = 0;
echo "<br>";
foreach ($B as $value)
{
    foreach ($value as $a)
    {
        $sum += $a;
    }
}
echo $sum."<br>";
echo "<br>";

$array = [];
$counter = 1;
for($i=0;$i<3;$i++)
{
    for($j=0;$j<3;$j++)
    {
        $array[$i][$j] = $counter++;
    }
}  
print_r($array);
echo "<br>";

$C = [2,5,3,9];
$multi = $C[0]*$C[1] + $C[2]*$C[3];
$result = $multi."<br>";
echo $result."<br>";


echo "<br>";
$user = ['name' => 'Polina', 'surname' => 'Palamarchuk', 'patronymic' => 'Aleksandrovna', 'Y' => 19];

echo $user['surname']." ".$user['name']." ".$user['patronymic']." ".$user['Y']." y.o. "."<br>";


$date = ['year' => '2022', 'month' => '02', 'day' => '26'];
echo $date['year']."-".$date['month']."-".$date['day']."<br>";

echo "<br>";
$arr = ['a', 'b', 'c', 'd', 'e'];
$n = sizeof($arr);
echo $n."<br>";

echo $arr[$n-1]."<br>";
echo $arr[$n-2]."<br>";
echo "<br>";


//10
function more10(int $a, int $b)
{
    if ($a+$b > 10){
       return true; 
    } 
    else{
        return false;
    }
}

function equal(int $a, int $b)
{
    if ($a == $b ){
        return true;
    } 
    else{
        return false;
    } 
}


$test = 0;
if (!$test) echo 'верно ';
echo "<br>";

$age = 11;
if ($age < 10 or $age > 99) echo "out of range"."<br>";
else
{
    $age = str_split($age);
    $sum = 0;
    for ($j = 0; $j < count($age); $j++)
    {
        $sum += $age[$j];
    }
    if ($sum <= 9) echo "One-digit sum of digits"."<br>";
    else{
        echo "Two-digit sum of digits"."<br>";
    }
}

$arr = [1, 2, 3];
$sum = array_sum($arr);
if (count($arr) == 3) echo array_sum($arr)."<br>";
echo "<br>";


//11
$A = [];
$k = 1;
$n = 20;

for ($i=1;$i<=$n;$i++)
{
    $a = str_repeat('x', $k);
    echo $a."<br>";
    $k += 1;
    $A[$i] = $a;
}
echo "<br>";


//12
$array = [1,2,3,4,5];
echo array_sum($array)/sizeof($array)."<br>";
echo array_sum(range(1, 100))."<br>";

$array = [625,64,289,16,91];
print_r(array_map('sqrt', $array));
echo "<br>";

$number = range(1, 26);
$letter = range('a', 'z');

$A = array_combine($letter, $number);
print_r($A);
echo "<br>";

$b = '1234567890';
$B = str_split($b, 2);
echo array_sum($B);