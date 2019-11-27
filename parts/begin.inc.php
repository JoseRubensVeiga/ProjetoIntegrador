<?php 

require 'functions/translate.php';

getLanguage();

$breadcrumbs = [
    'index' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
    ],
    '' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
    ],
    'noticias' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Notícias', 'News'), 'path' => '/noticias.php'],
    ],
    'curiosidades' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Curiosidades', 'Curiosities'), 'path' => '/curiosidades.php'],
    ],
    'criticas' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Críticas', 'Reviews'), 'path' => '/criticas.php'],
    ],
    'estreias' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Estreias', 'Premieres'), 'path' => '/estreias.php'],
    ],
    'contato' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Contato', 'Contact'), 'path' => '/contato.php'],
    ],
    'normas' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Normas de Utilização', 'Terms of Use'), 'path' => '/normas.php'],
    ],
    'quemsomos' => [
        ['name' => __('Início', 'Home'), 'path' => './index.php'],
        ['name' => __('Quem Somos', 'Who We Are'), 'path' => '/quemsomos.php'],
    ],
    
];

$url = explode('/', $_SERVER['REQUEST_URI']);

$url = str_replace('.php', '', end($url));



?>

<!DOCTYPE html>
<html lang="<?= __('pt-BR','en') ?>">

<head>
    <meta charset="utf-8" />
    <title>CineFatec - <?= __('Seu site sobre notícias, filmes e séries', 'Your site about news, movies and series!') ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body>
<a href="#navbarNavDropdown" class="sr-only" tabindex="1"><?= __('Ir diretamente para a navegação', 'Skeep to navigation') ?></a>
<a href="#main" class="sr-only" tabindex="2"><?= __('Ir diretamente para o conteúdo', 'Skeep to content') ?></a>
   <?php include('parts/preloader.inc.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <?php include('parts/header.inc.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col px-0">
                <?php include('parts/nav.inc.php'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9 px-0">
                <main id="main">