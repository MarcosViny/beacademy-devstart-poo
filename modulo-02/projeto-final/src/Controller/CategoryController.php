<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function listAction(): void
    {
        // include dirname(__DIR__).'/View/category/list.php';
        parent::render('category/list');
    }
    public function addAction(): void
    {
        // include dirname(__DIR__).'/View/category/add.php';
        parent::render('category/add');
    }
    public function editAction(): void
    {
        // include dirname(__DIR__).'/View/category/edit.php';
        parent::render('category/edit');
    }
}
