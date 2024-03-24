<?php
$array1 = ['a', 'b', 'c', 'b', 'a'];
$counts = array_count_values($array1);

foreach ($counts as $letter => $count) {
    echo "Буква $letter встречается $count раз(а) <br>";
}


$array2 = ['a', 'b', 'c', 'd', 'e'];
$array2[0] = '!';
$array2[3] = '!!';
print_r($array2);
echo '<br>';


$array3 = [1, 2, 3, 4, 5];
array_splice($array3, 1, 2);
print_r($array3);
echo '<br>';

$array4 = [
    1 => 'Понедельник',
    2 => 'Вторник',
    3 => 'Среда',
    4 => 'Четверг',
    5 => 'Пятница',
    6 => 'Суббота',
    7 => 'Воскресенье',
];
echo $array4[2];
echo '<br>';


$array5 = [
    'ru' => [
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота',
        7 => 'Воскресенье',
    ],
    'en' => [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday',
    ]    
    ];
echo $array5['ru'][1] . '<br>';
echo $array5['en'][3] . '<br>';

$array6 = [1, 2, 56, 64, 23];
function arrayItems($array, $index) {
    if ($index < count($array)) {
        echo $array[$index] . ' ';
        arrayItems($array, $index + 1);
    }
};
arrayItems($array6, 0)  . '<br>';
?>

