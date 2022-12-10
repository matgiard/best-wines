<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Blog;


class BlogController extends Controller
{


    public function showArticle()
    {
        $this->renderView('blog/index');
    }


    public function editArticle()
    {
        $this->renderView('blog/edit');
    }



    public function insertArticle()
    {
        if (isset($_POST['submit'])) {
            $article = new Blog;
            $article->setTitle(htmlentities($_POST['email']));
            $article->setContent(htmlentities($_POST['password']));

            $result = $article->insertArticle();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            }
            $this->renderView('user/insert', [
                'message' => $message
            ]);
        }
        $this->renderView('blog/insert');
    }
}
