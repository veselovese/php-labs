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
        if($x[0]=='.' || $x[0] == '0') return false;
        if( $x[strlen($x)-1 ] == '.') return false;
        for($i=0, $point_count=false; $i<strlen($x); $i++) {
            if($x[$i]!='0' && $x[$i]!='1' && $x[$i]!='2' && $x[$i]!='3' &&
                $x[$i]!='4' && $x[$i]!='5' && $x[$i]!='6' && $x[$i]!='7' &&
                $x[$i]!='8' && $x[$i]!='9' && $x[$i]!='.') return false;
            if($x[$i]=='.') {
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
        if(!bracketValidator($val)) {echo 'osh'; return 'Неправильная расстановка скобок'; }
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