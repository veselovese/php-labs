<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-5">
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['p'] == 'view') echo 'active';?>" href="?p=view">Просмотр</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['p'] == 'add') echo 'active';?>" href="?p=add">Добавление</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['p'] == 'edit') echo 'active';?>" href="?p=edit">Редактирование</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if ($_GET['p'] == 'delete') echo 'active';?>" href="?p=delete">Удаление</a>
      </li>
    </ul>
  </div>
</nav>
<div class='ml-5 mr-5 mt-5'>
