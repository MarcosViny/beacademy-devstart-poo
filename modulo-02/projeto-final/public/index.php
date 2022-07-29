<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName
    ];
}

// Rotas v2.0
$routes = [
    '/' => createRoute( IndexController::class, 'indexAction'),
    '/login' => createRoute( IndexController::class, 'loginActiomn'),
    '/produtos' => createRoute( ProductController::class, 'listAction'),
    '/produtos/novo' => createRoute( ProductController::class, 'addAction'),
    '/produtos/editar' => createRoute( ProductController::class, 'editAction'),
    '/categoria' => createRoute( CategoryController::class, 'listAction'),
    '/categoria/novo' => createRoute( CategoryController::class, 'addAction'),
    '/categoria/editar' => createRoute( CategoryController::class, 'editAction'),
];


// Rotas v1.0 - Sem função createRoute
/* $routes = [
    '/' => [
        'controller' => IndexController::class,
        'method' => 'indexAction'
    ],
    '/produtos' => [
        'controller' => ProductController::class,
        'method' => 'listAction'
    ]
]; */

if(false === isset($routes[$url])) {
    /* Antes
    $e = new ErrorController();
    $e->notFoundAction(); */

    // Depois
    // Quando a classe só é instanciada para ser utilizada uma vez pode ser feito da seguinte forma:
    (new ErrorController)->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];
(new $controllerName())->$methodName();

// Antes de começar a utilizar as Rotas
/* if($url === '/') {
    $c = new IndexController();
    $c->IndexAction();
} elseif($url === '/login') {
    $c = new IndexController();
    $c->loginAction();
} elseif($url === '/produtos') {
    $p = new ProductController();
    $p->listAction();
    $p->addAction();
    $p->editAction();
} elseif($url === "/categoria") {
    $cat = new CategoryController();
    $cat->listAction();
    $cat->addAction();
    $cat->editAction();
} else {
    $e = new ErrorController();
    $e->notFoundAction();
} */