<?php
    echo preg_replace('/\d/', '$0$0', 'a1b2c3');
    echo '<br>';
    echo preg_replace('/(.)\1/', '!', 'aae xxz 33a');
    echo '<br>';
    echo preg_replace_callback("/'(d+)'/", 'find', "2aaa'3'bbb'4'");
    function find($matches) {
        return "'".($matches[0] * 2)."'";
    };
    echo '<br>';
    echo preg_replace('/(\d{2})-(\d{2})-(\d{4})/', '$3.$2.$1', '31-12-2014');
    echo '<br>';
    var_dump(preg_match_all('/ab{4,}a/', 'aa aba abba abbba abbbba abbbbba', $matches) ? $matches[0] : []);
    echo preg_match('/[a-z]+\.[a-z]{2, 3}/', 'index.php') ? 'Да' : 'Нет';
    echo '<br>';
    echo preg_replace('/^aaa/', '!', 'aaa aaa aaa', 1);
    echo '<br>';
    echo preg_replace('/2\+3/', '', '2+3 223 2223');
?>