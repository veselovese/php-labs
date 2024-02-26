<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3, var 5</title>
</head>
<body>
    <main>
        <?php
        $a = 27;
        $b = 12;
        $c = round(sqrt($a**2 + $b**2), 2);
        echo $c.'<br>';

        $hunter = 'охотник';
        $wants = 'желает';
        $know = 'знать';
        $fizan = 'фазан';
        $sits = 'сидит';
        echo "Каждый $hunter $wants $know, где $sits $fizan<br>";
        echo 'Каждый '.$hunter.' '.$wants.' '.$know.', где '.$sits.' '.$fizan.'<br>';

        $a = 7;
        $b = 4;
        $c = ' воробья';
        echo $a-$b.$c.'<br>';

        $a = 2;
        $b = '2';
        $d = '2a';
        echo 'a == b  |  '.($a == $b).'<br>';
        echo 'a >= b  |  '.($a >= $b).'<br>';
        echo 'a <= b  |  '.($a <= $b).'<br>';
        echo 'a !== b  |  '.($a !== $b).'<br>';
        echo 'a != d  |  '.($a != $d).'<br>';
        echo 'a !== d  |  '.($a !== $d).'<br>';
        echo 'b != d  |  '.($b != $d).'<br>';
        echo 'b !== d  |  '.($b !== $d).'<br>';
        echo 'a < d  |  '.($a < $d).'<br>';
        echo 'b < d  |  '.($b < $d).'<br>';

        $a = 2;
        $b = 2.0;
        $c = '2';
        $d = 'two';
        $g = true;
        $f = false;
        echo gettype($a).'  |  '.(int)$a.'<br>';
        echo gettype($b).'  |  '.(int)$b.'<br>';
        echo gettype($c).'  |  '.(int)$c.'<br>';
        echo gettype($d).'  |  '.(int)$d.'<br>';
        echo gettype($g).'  |  '.(int)$g.'<br>';
        echo gettype($f).'  |  '.(int)$f.'<br>';

        $a = 37;
        $b = '4';
        echo ($a%$b > 0) ? gettype($a / $b).' '.$a%$b.'<br>': $a.' / '.$b.' = '.$a/$b.'<br>'; 

        $a = 27;
        $b = 12;
        if($a == TRUE) echo $b/$a.'<br>';
        else echo (bool)$a.'<br>';

        $year = 2022;
        $month = 3;
        $day = 2;
        echo sprintf("Дата: %'.04d-%'.02d-%'.02d".'<br>', $year, $month, $day);

        $s = 0;
        for($i = 0; $i < 6; $i++) $s += $i;
        echo $s.'<br>';
        ?>
    </main>
</body>
</html>