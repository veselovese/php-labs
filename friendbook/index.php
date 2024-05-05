<?php
if (!isset($_GET['p'])) $_GET['p'] = 'view';
if (!isset($_GET['o'])) $_GET['o'] = 'id';
if (!isset($_GET['page'])) $_GET['page'] = '0';
require('header.php');
$db = require('db.php');
$connect = mysqli_connect($db['host'], $db['user'], $db['password'], $db['database']);
if (mysqli_connect_errno()) echo mysqli_connect_error(); 
if ($_GET['p'] == 'view' || $_GET['p'] == 'add' || $_GET['p'] == 'edit' || $_GET['p'] == 'delete') require($_GET['p'].'.php');
if (isset($_POST['save'])) {
    $sql = "INSERT INTO `friend`(`firstname`, `name`, `lastname`, `gender`, `birthdate`, `email`, `address`, `phone`, `comment`) VALUES ('".htmlspecialchars($_POST['firstname'])."',
    '".htmlspecialchars($_POST['name'])."', '".htmlspecialchars($_POST['lastname'])."', '".($_POST['gender'])."', '".($_POST['birthdate'])."', '".htmlspecialchars($_POST['email'])."',
    '".htmlspecialchars($_POST['address'])."', '".($_POST['phone'])."', '".htmlspecialchars($_POST['comment'])."')";
    mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) echo 'Ошибка добавления: '.mysqli_error($connect);
    else $s='Запись успешно добавлена';
};
if (isset($_POST['edit'])) {
    $sql = "UPDATE `friend` SET `firstname`='".htmlspecialchars($_POST['firstname'])."',`name`='".htmlspecialchars($_POST['name'])."',
    `lastname`='".htmlspecialchars($_POST['lastname'])."',`gender`='".($_POST['gender'])."',`birthdate`='".($_POST['birthdate'])."',
    `email`='".htmlspecialchars($_POST['email'])."',`address`='".htmlspecialchars($_POST['address'])."',`phone`='".($_POST['firstname'])."',
    `comment`='".htmlspecialchars($_POST['comment'])."' WHERE `id`=".$_POST['id'];
    mysqli_query($connect, $sql);
    if (mysqli_errno($connect)) echo 'Ошибка добавления: '.mysqli_error($connect);
        else $s='Запись успешно обновлена';
};
require('footer.php');
?>