<?php

require 'translate.php';

$lang = $_GET['lang'];

setLanguage($lang);

header('location: '. $_SERVER['HTTP_REFERER']);