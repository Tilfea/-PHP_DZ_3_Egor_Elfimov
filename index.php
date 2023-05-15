<?php
echo '1 &#9989. Сделайте функцию, которая возвращает куб числа. Число передается
параметром.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='num' type='number' placeholder='Введите значение'> </form>";
$arg = (int)$_POST['num'];

function kub($arg)
{
    return ($arg**3);
};
echo kub($arg);
echo "<hr />";

echo '2 &#9989. Сделайте функцию, которая возвращает сумму двух чисел. Числа
передаются параметрами функции.' . "<br><br>";

function sum($arg1, $arg2)
{
    return ($arg1 + $arg2);
};
echo sum(12, 13);
echo "<hr />";

echo '3 &#9989. Сделайте функцию, которая принимает параметром число от 1 до 7, а
возвращает день недели на русском языке.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='grad' type='number' placeholder='Введите значение'> </form>";
$arg3 = (int)$_POST['grad'];
function day($arg3)
{
if ($arg3 > 0 && $arg3 <8){
    switch ($arg3){
        case 1:
            return "понедельник";
        case 2:
            return "вторник";
        case 3:
            return "среда";
        case 4:
            return "четверг";
        case 5:
            return "пятница";
        case 6:
            return "суббота";
        case 7:
            return "воскресенье";
    }
} echo "Не верно задано значение";
}
echo day($arg3);
echo "<hr />";

echo '4 &#9989. Сделайте функцию, которая параметром принимает число и проверяет -
отрицательное оно или нет. Если отрицательное - пусть функция вернет true,
а если нет - false.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='num2' type='number' placeholder='Введите значение'> </form>";
$arg4 = (int)$_POST['num2'];
function even($arg4)
{
    return ($arg4 >= 0 ? "$arg4 = false" : "$arg4 = true");
};
echo even($arg4);
echo "<hr />";

echo '5 &#9989. Сделайте функцию getDigitsSum (digit - это цифра), которая параметром
принимает целое число и возвращает сумму его цифр.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='num3' type='number' placeholder='Введите число'> </form>";
$digit = (int)$_POST['num3'];
function getDigitsSum($digit)
{
$total;
$digit = $digit;
while ($digit !=0){
    $total+=$digit %10;
    $digit = $digit /10;
}
return $total;
}
echo getDigitsSum($digit);

echo "<hr />";
echo '6 &#9989. Найдите все года от 1 до 2020, сумма цифр которых равна 13. Для этого
используйте вспомогательную функцию getDigitsSum из предыдущей задачи.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='year' type='number' placeholder='До какого года считать?'> </form>";
$year = (int)$_POST['year'];
function year($year)
{
    $total = [];
    for ($i=1; $i < $year; $i++){
        $v=getDigitsSum($i);
        if($v == 13){
            array_push($total, $i); 
        }
    }
    return $total;
}
echo '<pre>';
print_r(year($year));
echo '</pre>';

echo "<hr />";
echo '7 &#9989. Сделайте функцию isEven() (even - это четный), которая параметром
принимает целое число и проверяет: четное оно или нет. Если четное - пусть
функция возвращает true, если нечетное - false.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='even' type='number' placeholder='Введите целое число'> </form>";
$even = (int)$_POST['even'];
function isEven($a)
{
    if ($a %2 == 0){
        return "true";
    } return "false";
}
echo isEven($even);

echo "<hr />";
echo '8 &#9989. Сделайте функцию, которая принимает строку на русском языке, а
возвращает ее транслит.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='string' type='text' placeholder='Введите строку'> </form>";
$string = $_POST['string'];
function translit($string)
{
    $trns = [
		'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
        'е' => 'e', 'ё' => 'e', 'ж' => 'zh','з' => 'z', 'и' => 'i',
		'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
		'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
		'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
		'ш' => 'sh', 'щ' => 'sch','ь' => '',  'ы' => 'y', 'ъ' => '',
		'э' => 'e', 'ю' => 'yu','я' => 'ya',
		'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
		'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh','З' => 'Z', 'И' => 'I',
		'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
		'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
		'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch',
		'Ш' => 'Sh', 'Щ' => 'Sch','Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
		'Э' => 'E', 'Ю' => 'Yu','Я' => 'Ya',
    ];
    $total = strtr($string, $trns);
    return $total;
}
echo translit($string);

echo "<hr />";
echo '9 &#9989. Сделайте функцию, которая возвращает множественное или единственное
число существительного. Пример: 1 яблоко, 2 (3, 4) яблока, 5 яблок. Функция
первым параметром принимает число, а следующие 3 параметра — форма
для единственного числа, для чисел два, три, четыре и для чисел, больших
четырех, например, func(3, \'яблоко\', \'яблока\', \'яблок\').' . "<br><br>";
function func($num1, $one, $three, $mn)
{
    if ($num1 == 1){
        return "$num1 $one";
    } elseif($num1 > 1 && $num1 <5){
        return "$num1 $three";
    } else {
        return "$num1 $mn";
    }
}
echo func(5, 'яблоко', 'яблока', 'яблок');
echo "<hr />";
echo '10 &#9989. Дан массив с числами. Выведите последовательно его элементы
используя рекурсию и не используя цикл.' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='arr' type='text' placeholder='Введите массив чисел'> </form>";
$arr = $_POST['arr'];
$arr = explode(",", $arr);

function rec(array $arr)
{
    static $a = 0;
    echo "$arr[$a] ";
    $a++;
    if(count($arr) != $a){
        return rec($arr);
    } return;
}
echo rec($arr);

echo "<hr />";
echo '11 &#9989. Дано число. Сложите его цифры. Если сумма получилась более 9-ти,
опять сложите его цифры. И так, пока сумма не станет однозначным числом
(9 и менее).' . "<br><br>";
echo "<div class='form'> <form method='POST'> <input name='num2' type='number' placeholder='Введите целое число'> </form>";
$num2 = (int)$_POST['num2'];
// через цикл
// function nine($n)
// {
//     $total = 0;
// for ($i=0; $i < strlen((string)$n); $i++){
// $total+= ($n%10);
// $n = $n/10;
// }
// if ($total <= 9){
// return $total;
// } else {return nine($total);}
// }

// echo nine($num2);

// через рекурсию
function nine($n)
{
$total = (intdiv($n, 10)) + ($n %10);
if ($total <= 9){
return $total;
} else {return nine($total);}
}

echo nine($num2);

echo "<hr />";
echo '12 &#9989. Рассчитать скорость движения машины и выведите её в удобочитаемом
виде. Осуществить возможность вывода в км/ч, м/c. Представить решение
задачи с помощью одной функции.' . "<br><br>";

function car($hour = 1, $len = 100, $tupe = "км/ч"){
if ($tupe == "км/ч"){
    $sp = $len/$hour;
    echo "Для преодоления расстояния в " . $len . "км за " . $hour . "ч нужно двигать со скоростью " . $sp . "км/ч";
} else{
    $sp = ($len*3600)/($hour*1000);
    echo "Для преодоления расстояния в " . $len . "км за " . $hour . "ч нужно двигать со скоростью " . $sp . "м/c";
}
}

echo car(2, 250, "м/c");

echo "<hr />";
echo '13 &#9989. Даны 2 слова, определить можно ли из 1ого слова составить 2ое, при
условии что каждую букву из строки 1 можно использовать только один раз.' . "<br><br>";

function force($a, $b){
if (strlen($a)< strlen($b)){
    return "NO";
} else{
    $total;
    for ($i = 0; $i < strlen($b); $i++){
    if(substr_count($a, $b[$i])){
        $total++;
        $a=substr_replace($a,'',$b[$i],1);
    }
}
if ($total == strlen($b)){
    return "YES";
} else{return "NO";};
}
}

$a = 'may the force be with you!';
$b = 'maytheforcebewithyou!';
echo force($a, $b);

echo "<hr />";
echo '14 &#9989. Палиндромом называют последовательность символов, которая читается
как слева направо, так и справа налево. Напишите функцию по определению
палиндрома по переданному параметру.' . "<br><br>";

echo "<div class='form'> <form method='POST'> <input name='rev' type='text' placeholder='Введите слово'> </form>";
$rev = $_POST['rev'];

function rev($rev){
    $rev2 = strrev($rev);
    if ($rev == $rev2){
        return "Yes";
    } return "No";
}
echo rev($rev);


echo "<hr />";
echo '15. Создание функцию создания таблицы умножения в HTML-документе в
виде таблицы с использованием соотв. тегов.' . "<br><br>";

echo "<hr />";
echo '16. Дана строка с текстом. Напишите функцию определения самого длинного
слова.' . "<br><br>";

echo "<hr />";
echo '17. Напишите функцию определения суммарного количества единиц в числах
от 1 до 100.' . "<br><br>";

echo "<hr />";
echo '18. Напишите функцию, которая разбивает длинную строку тегами <br> так,
чтобы длина каждой подстроки была не более N символов. Новая подстрока
не должна начинаться с пробела.' . "<br><br>";

echo "<hr />";