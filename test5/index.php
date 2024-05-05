<?php
if(isset($_POST['birthday'])) {
    $birthday = $_POST['birthday'];
    setcookie('birthday', $birthday, time() + 31536000);
} elseif(isset($_COOKIE['birthday'])) {
    $birthday = $_COOKIE['birthday'];
} else {
    $birthday = null;
}

if ($birthday) {
    $today = date_create(date('Y-m-d'));
    $user_birthday = date_create($birthday);
    $diff = date_diff($today, $user_birthday);
    $days_left = $diff->format('%a');

    if ($days_left == 0) {
        echo "С днем рождения, поздравляем!";
    } else {
        echo "До вашего дня рождения осталось $days_left дней.";
    }
} else {
    echo "<form method='post'>
            Пожалуйста, введите вашу дату рождения: <input type='date' name='birthday'>
            <input type='submit' value='Отправить'>
          </form>";
}
?>