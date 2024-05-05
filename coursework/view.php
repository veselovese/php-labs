<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
    <section class="nav-post">
      <ul class="nav-post__list">
        <li class="nav-post__item">
            <a class="nav-link" href="./posts.php">Добавить</a>
        </li>
        <li class="nav-post__item">
            <a class="nav-link" href="./viewing.php?channel=all">Смотреть посты</a>
        </li>
      </ul>
    </section>

    <div class="wrapper">
      <section class="post">
        <ul class="post__list">
          <li class="post__item">
              <a class="link" href="./viewing.php?channel=all">Все</a>
          </li>
          <li class="post__item">
              <a class="link" href="?channel=music">Музыка</a>
          </li>
          <li class="post__item">
              <a class="link" href="?channel=cooking">Кулинария</a>
          </li>
          <li class="post__item">
              <a class="link" href="?channel=movie">Кино</a>
          </li>
        </ul>
      </section>
      <section class="news-line">
        <ul class="news-line__list">
          <?php
          require('connect.php');
          $channel = $_GET['channel'] ?? 'all';
          $channel_condition = $channel !== 'all' ? "AND channels.name = '$channel'" : '';
          $sql = "SELECT hashtags.name AS hashtag_name, posts.description AS message, users.login AS sender
                  FROM posts
                  JOIN hashtags ON posts.hashtag_id = hashtags.id
                  JOIN users ON posts.user_id = users.id
                  LEFT JOIN channels ON posts.channel_id = channels.id
                  WHERE posts.save = 0 $channel_condition";
          $result = $connect->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $hashtag_name = $row["hashtag_name"];
              $message = $row["message"];
              $sender = $row["sender"];
              echo "<li class='news-line__item'>";
              echo "<p class='news-line__user' style='color: var(--link-color);'>От: " . $sender . "</p>";
              echo "<p class='news-line__message' style='color: var(--input-border);'>#" . $hashtag_name . "</p>";
              echo "<p class='news-line__hastags'>Сообщение: " . $message . "</p>";
              echo "</li>";
            }
          } else {
            echo "<p style='font-size: 2rem;'>Нет сообщений.</p>";
          }
          ?>
        </ul>
      </section>
    </div>
  </main>
  <footer>
  </footer>
</body>

</html>