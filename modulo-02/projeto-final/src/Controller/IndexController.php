<?php

declare(strict_types=1);

namespace App\Controller;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        // Mostra Pasta Atual do Diretório
        //echo dirname(__DIR__);
        // include dirname(__DIR__).'../View/index/index.php';
        parent::render('index/index');
    }

    public function loginAction()
    {
        // Mostra Pasta Atual do Diretório
        // echo dirname(__DIR__);
        // include dirname(__DIR__).'../View/index/login.php';
        parent::render('index/login');
    }
}
