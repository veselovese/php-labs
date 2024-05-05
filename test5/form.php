<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['email'] = $_POST['email'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма с заполненным email</title>
</head>
<body>
    <form method="post">
        <label for="name">Имя: <input type="text" id="name" name="name"></label>
        <label for="surname">Фамилия: <input type="text" id="surname" name="surname" required></label>        
        <label for="password">Пароль: <input type="password" id="password" name="password" required></label>
        <label for="email">Email: <input type="email" id="email" name="email" value="<?php echo $_SESSION['email'];?>"></label>        
        <button type="submit">Отправить</button>
    </form>
</body>
</html>