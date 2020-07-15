<?php
#Autor: Jairo dos Santos Cristóvão
var_dump($_GET);

echo'<a href="sobre">Sobre</a>';
$url=explode('/',$_GET['url']);
echo'<br>';
var_dump($url);

echo'<br>';
echo'<br>';

if (isset($_GET['url'])) {
    require_once "paginas/".$url[0].".php";
    # code...
}