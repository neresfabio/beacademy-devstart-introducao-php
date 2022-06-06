<?php
$url = $_SERVER['REQUEST_URI'];

include 'pages/menu.php';

if($url === '/'){
    include 'pages/home.php';
}elseif($url === '/login'){
    include 'pages/login.php';
}elseif($url === '/cadastro'){
    include 'pages/cadastro.php';
}else{
    include 'pages/404.php';
}