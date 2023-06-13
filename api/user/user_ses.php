<?php
session_start();
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
                    <li><a href="./user_ses.php">Пользователь</a></li>
                    <li><a href="/vxod.html">Выйти</a></li>
                </ul>
            </nav>
            <!-- logo -->
            <div class="logo"><span>Z</span></div>
            <!-- title & content -->
            <section class="header-content">
                <h1></h1>
                <p><?php
                    echo ' привет' . $_SESSION['email'] .  '!';
                    ?></p>
                <button><a href="../user/index-session.php" class="btn">Вернуться на главную</a></button>
                <!--                <button>Посмотреть услуги</button>-->
            </section>
        </header>
</section_header>
