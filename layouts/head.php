<?php
/*require_once($_SERVER['DOCUMENT_ROOT'] . '/constants.php');
require_once(BASEDIR . 'db.php');
require_once(BASEDIR . 'functions.php');
*/
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">

    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/style.css"/>

    <title><?= $title; ?></title>
</head>


<header class="header">


    <nav class="navbar navbar-default">
        <div class="container container-header">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="logo-img" src="../assets/img/logo.png" alt=""/>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <div class="header-right">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a class="nav-link for_scroll" href=".section-conditions">Условия</a></li>
                        <li class="nav-item"><a class="nav-link for_scroll" href=".section-graph">Варианты</a></li>
                        <li class="nav-item"><a class="nav-link for_scroll" href=".section-success">Путь к успеху</a></li>
                        <li class="nav-item"><a class="nav-link for_scroll" href=".footer">Контакты</a></li>
                    </ul>

                    <div class="btn-wrapper">
                        <a class="take-part-btn" href="#" data-toggle="modal" data-target="#myModal">Я Участвую!</a>
                    </div>
                </div>
            </div>


        </div>

    </nav>


</header>