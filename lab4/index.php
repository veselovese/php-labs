<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>php.lab 3</title>
</head>
<body style='display: flex; flex-direction: column; justify-content: space-between; min-height: calc(100vh - 18.4px);'>
    <header>
        <img style='max-width: 200px; position: absolute;' src='pic/logo.png' alt='#'>
        <p style='margin: 0 auto; padding-top: 20px; width: max-content;'>Домашняя работа: Solve the equation</p>
    </header>
    <main>
    <?php
        $arr = array(1, 2, 33, 44, 555);

        $a[0] = 1;
        $a[2] = 33;

        $b = ['one' => 1, 'two' => 2];

        var_dump($arr);
        echo '<br>';
        print_r($a);
        echo '<br>';
        print_r($b);

        foreach($arr as $key => $value){
            echo "$key => $value<br>";
        };
    ?>
    </main>
    <footer>Работу сделал Веселов Матвей</footer>    
</body>
</html>