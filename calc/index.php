<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="1+2" name="val">
        <button type="submit">Вычислить</button>
    </form>
    <?php
    if(isset($_POST['val'])) {
     $res = calculateBracket($_POST['val']);
     if(isnum($res)) echo 'Значение выражения: '.$res;
     else echo 'Ошибка вычисления выражения: '.$res;
    }
    function isnum($x) {
        if(!$x) return false;
        if(substr($x, 0, 1) == '.' || substr($x, 0, 1) == '0') return false;
        if(substr($x, strlen($x)-1, 1) == '.') return false;
        for($i = 0, $point_count = false; $i < strlen($x); $i++) {
            if(substr($x, $i, 1) != '0' && substr($x, $i, 1) != '1' && substr($x, $i, 1) != '2' && substr($x, $i, 1) != '3' &&
                substr($x, $i, 1) != '4' && substr($x, $i, 1) != '5' && substr($x, $i, 1) != '6' && substr($x, $i, 1) !='7' &&
                substr($x, $i, 1) != '8' && substr($x, $i, 1) != '9' && substr($x, $i, 1) != '.') return false;
            if(substr($x, $i, 1) == '.') {
                if( $point_count ) return false;
                else $point_count=true;
            }
        }
        return true;
    } 
    function calculate($val) {
        if(!$val) return 'Выражение не задано';
        if(isnum($val)) return $val;
        $args = explode('+', $val);
        if(count($args) > 1) {
            $sum = 0;
            for($i = 0; $i < count($args); $i++) {
                $arg = calculate($args[$i]);
                if(!isnum($arg)) return $arg;
                $sum += $arg;
            }
            return $sum;
        }
        $args = explode('-', $val);
        if(count($args) > 1) {
            $sub = $args[0];
            for($i = 1; $i < count($args); $i++) {
                $arg = calculate($args[$i]);
                if(!isnum($arg)) return $arg;
                $sub -= $arg;
            }
            return $sub;
        }
        if(count($args) == 1) {
            $sub = $args[0];
            return -$args;
        }
        $args = explode('*', $val);
        if(count($args) > 1) {
            $sup = 1;
            for($i = 0; $i < count($args); $i++) {
                $arg = $args[$i];
                if(!isnum($arg)) {
                    //print_r($args);
                    return 'Неправильная форма числа*';
                }
                $sup *= $arg;
            }
            return $sup; 
        }
        $args = explode('/', $val);
        if(count($args) > 1) {
            $div = $args[0];
            for($i = 1; $i < count($args); $i++) {
                $arg = $args[$i];
                if(!isnum($arg)) return 'Неправильная форма числа/';
                $div /= $arg;
            }
            return $div; 
        }
    }
    return 'Недопустимые символы в выражении'; 
    function bracketValidator($val) {
        $open = 0;
        for($i = 0; $i < strlen($val); $i++) {
            if($val[$i] == '(') $open++;
            if($val[$i] == ')') {
                $open--;
                if($open < 0) return false;
            }
        }
        if($open !== 0) return false;
        return true;
    } 
    function calculateBracket($val) {
        if(!bracketValidator($val)) return 'Неправильная расстановка скобок';
        $start = strpos($val, '(');
        if($start === false) return calculate($val);
        $end = $start + 1;
        $open = 1;
        while($open && $end < strlen($val)) {
            if($val[$end] == '(') $open++;
            if($val[$end] == ')') $open--;
            $end++;
        }
        $new_val = substr($val, 0, $start);
        $new_val .= calculateBracket(substr($val, $start + 1, $end - $start - 2));
        $new_val .= substr($val, $end);
        return calculateBracket($new_val);
    } 
    ?>
</body>
</html>