<?php

namespace App\Controllers;

use Core\Controller;



class BlogController extends Controller
{

    public function insertArticle()
    {

        $this->renderView('blog/insert');
    }

    public function showArticle()
    {
        $this->renderView('blog/index');
    }


    public function editArticle()
    {
        $this->renderView('blog/edit');
    }
}
