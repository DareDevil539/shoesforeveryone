<?php
require 'includes/config.php';

if ($_SERVER['REDIRECT_URL']=='/') {
    $page='home';
} else {
    $page=substr($_SERVER['REDIRECT_URL'], 1);
    if (!preg_match('/^[A-z0-9]{3,15}$/', $page)) {
        exit('error url');
    }
}

session_start();

if (file_exists('pages/' . $page . '.php')) {
    include 'pages/' . $page . '.php';
} else {
    include 'pages/errors/404.php';
    exit();
}
?>﻿
