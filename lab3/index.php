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
    $task = '22 * X = 220';

    if (strpos($task, '+') !== false) {
        $operator = '+';
    } elseif (strpos($task, '-') !== false) {
        $operator = '-';
    } elseif (strpos($task, '*') !== false) {
        $operator = '*';
    } else {
        $operator = '/';
    };

    $taskParts = explode(' ', $task);
    $variablePosition = array_search('X', $taskParts);
    
    if ($variablePosition == 0) {
        if ($operator === '+') {
            $result = $taskParts[$variablePosition + 4] - $taskParts[$variablePosition + 2];
        } elseif ($operator === '-') {
            $result = $taskParts[$variablePosition + 4] + $taskParts[$variablePosition + 2];
        } elseif ($operator === '*') {
            $result = $taskParts[$variablePosition + 4] / $taskParts[$variablePosition + 2];
        } else {
            $result = $taskParts[$variablePosition + 4] * $taskParts[$variablePosition + 2];
        };
    } else {
        if ($operator === '+') {
            $result = $taskParts[$variablePosition + 2] - $taskParts[$variablePosition - 2];
        } elseif ($operator === '-') {
            $result = $taskParts[$variablePosition - 2] - $taskParts[$variablePosition + 2];
        } elseif ($operator === '*') {
            $result = $taskParts[$variablePosition + 2] / $taskParts[$variablePosition - 2];
        } else {
            $result = $taskParts[$variablePosition - 2] / $taskParts[$variablePosition + 2];
        };
    };

    echo 'Значение переменной X = '.$result;
    ?>
    </main>
    <footer>Работу сделал Веселов Матвей</footer>    
</body>
</html>