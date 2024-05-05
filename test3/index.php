<?php
$file = fopen("test.txt", "w");
fwrite($file, "12345");
fclose($file);

$fileSize = filesize("pic.jpg");
$fileSizeMb = round($fileSize / 1024 / 1024, 2);

echo "Размер файла: $fileSize байт <br>";
echo "Размер файла: $fileSizeMb мегабайт";

$file = "test.txt";
$way = "dir/test.txt";

rename($file, $way);

$newArray = array("aA", "bB", "cC", "dD");

$file = fopen("testArray.txt", "w");

foreach ($newArray as $value) {
    fwrite($file, $value . "\n"); 
}

fclose($file);

$file = file("testArraySum.txt");

$sum = 0;

foreach ($file as $line) {
    $sum += intval($line);
}

echo "Сумма чисел в файле " . $sum;
?>