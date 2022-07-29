<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include_once 'telas/head.php';
include_once 'telas/menu.php';
include_once 'acoes.php';

// Alternativas para Funnction Match
/* if ($url === '/') {
    include_once "telas/home.php";
} elseif ($url === '/login') {
    include_once "telas/login.php";
} elseif ($url === "/cadastro") {
    include_once "telas/cadastro.php";
} elseif ($url === "/listar") {
    include_once "telas/listar.php";
} else {
    include_once "telas/404.php";
} */

/* if ($url === '/') {
    home();
} elseif ($url === '/login') {
    login();
} elseif ($url === "/cadastro") {
    cadastro();
} elseif ($url === "/listar") {
    listar();
} else {
    error404();
} */

match ($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => error404()
};

include_once 'telas/footer.php';