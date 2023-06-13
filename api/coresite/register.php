<?php
//if (isset($_POST['register'])) {
//    // Проверка правильности заполнения формы
//    $errors = [];
//
//    $name = trim($_POST['name']);
//    if (empty($name)) {
//        $errors[] = "Введите ваше ФИО";
//    }
//
//    $email = trim($_POST['email']);
//    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
//        $errors[] = "Введите корректный адрес электронной почты";
//    }
//
//    $login = trim($_POST['login']);
//    if (empty($login)) {
//        $errors[] = "Введите логин";
//    }
//
//    $password = $_POST['password'];
//    $confirm_password = $_POST['confirm_password'];
//    if (empty($password) || $password !== $confirm_password) {
//        $errors[] = "Пароли не совпадают";
//    }
//
//    // Если в данных нет ошибок, сохраняем информацию в базе данных
//    if (empty($errors)) {
//        // Подключение к базе данных
//        $host = 'localhost'; // Имя хоста
//        $user = 'root'; // Имя пользователя
//        $password = ''; // Пароль
//        $db_name = 'usersbd'; // Имя базы данных
//
//        $link = mysqli_connect($host, $user, $password, $db_name);
//
//        if (!$link) {
//            die('Ошибка подключения (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
//        }
//
//        // Подготовка запроса к базе данных
//        $sql = "INSERT INTO users1 (name, email, login, password, confirm_password) VALUES ($name, $email, $login, $password, $confirm_password)";
////          $sql = "INSERT INTO `users1` ( name, email, login, password) VALUES (`$name`, `$email`, `$login`, `$password`)";
//        $stmt = mysqli_prepare($link, $sql);
//
//        // Хэширование пароля
//        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
//
//        // Привязываем значения параметров запроса
//        mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $login, $password, $hashed_password);
//
//        // Выполнение запроса к базе данных
//        if (mysqli_stmt_execute($stmt)) {
//            echo "Регистрация прошла успешно";
//        } else {
//            echo "Ошибка при выполнении запроса: " . mysqli_stmt_error($stmt);
//        }
//
//        // Закрытие запроса и соединения с базой данных
//        mysqli_stmt_close($stmt);
//        mysqli_close($link);
//    } else {
//        // Если были обнаружены ошибки, выводим их пользователю
//        foreach ($errors as $error) {
//            echo "<p style='color: red;'>$error</p>";
//        }
//    }
//}

require_once 'coresite.php';
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $sql = "INSERT INTO  users1 ( name, email, login, password, confirm_password) VALUES ('$name', '$email', '$login', '$password', '$confirm_password')";



    $stmt = $conn ->prepare ('INSERT INTO users1 (name, email, login, password, confirm_password) VALUES ($name, $email, $login, $password, $confirm_password');


}
if($result = $conn->query($sql)){
    $sql = "SELECT * FROM `users1` WHERE `email` = '$email'";
    $result = $conn->query($sql);
    foreach ($result as $row){
        $_SESSION['UID'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
    }
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/zdorovie.css">

    <title>Document</title>
</head>
<body>
<section_header>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <div class="container-fluid">
        <!-- Background animtion-->
        <div class="background">
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
            <div class="cube"></div>
        </div>
        <!-- header -->
        <header>
            <nav>
                <ul>
                    <li><a href="/index.html">Главная</a></li>
                    <li><a href="/services.html">Услуги</a></li>
                    <li><a href="/contacts.html">Контакты</a></li>
                    <li><a href="/vxod.html">Пользователь</a></li>
                    <li><a href="/vxod.html">Выйти</a></li>
                </ul>
            </nav>
            <!-- logo -->
            <div class="logo"><span>Z</span></div>
            <!-- title & content -->
            <section class="header-content">
                <h1>Вы успешно авторизировались</h1>
                <p><?php
                    echo 'Добро пожаловать ' . $_SESSION['name'] .  '!';
                    ?></p>
                <button><a href="../user/index-session.php" class="btn"> На главную</a></button>
            </section>
        </header>
</section_header>


</body>
</html>