<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Посты</title>
</head>

<body>
    <header>
    <div>
    <h1>Twittort</h1>
    <nav>
    <?php if (!isset($_SESSION['user'])) { ?>
                <a class="hed-link-singin" href="registration.php">Зарегистрироваться</a>
                <a class="hed-link-singup" href="index.php">Войти</a>
            <?php } ?>
            <?php if (isset($_SESSION['user'])) { ?>
                <a class="hed-link-singin" href="profile.php">@<?= $_SESSION['user']['login'] ?></a>
                <a class="hed-link-singup" href="logout.php">Выйти</a>
            <?php } ?>
    </nav>
    </div>
  </header>
    <main>
        <section>
        <form  class="add-form" action="add.php" method="post">
            <div>
            <label>Пост
            <textarea name="post" class="message__txt" placeholder="Ел сегодня пельмени.." required></textarea>
            </label>
            </div>
            <button class="message__btn" type="submit">Добавить запись</button>
            <?php
        if (isset($_SESSION['message'])) {
        echo '<p  style="font-size: 2rem;" class="msg"> ' . $_SESSION['message'] . ' </p>';
        unset($_SESSION['message']);
        }
        ?>
        </form>
        </section>
    </main>
    <footer>
        
    </footer>
</body>

</html>