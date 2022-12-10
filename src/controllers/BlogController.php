<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Product;
use App\Models\Article;



class BlogController extends Controller
{


    public function showArticle()
    {

        $article = new Article;
        $articles = $article->findAll();


        $this->renderView('blog/index', compact('articles'));
    }




    public function editArticle()
    {
        $this->renderView('blog/edit');
    }



    public function insertArticle()
    {

        if (isset($_POST['submit'])) {


            $article = new Article;
            $article->setTitle(htmlentities($_POST['title']));
            $article->setContent(($_POST['content']));
            // $article->setDate(htmlentities($_POST['date']));
            $article->setPhoto_article($_FILES['image']['name']);


            if (count($_FILES) > 0) {
                $allowed[] = "image/jpeg";
                $allowed[] = "image/png";

                if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {

                    $folder = "uploads/blog";
                    if (!file_exists($folder)) {
                        mkdir($folder, 0777, true);
                    }
                    $destination = $folder . $_FILES['image']['name'];
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    $_POST['image'] = $destination;
                }
            }

            $result = $article->insertArticle();

            if ($result) {
                $message =  "insertion bien effectuée";
            } else {
                $message =  "échec";
            };
            $this->renderView('blog/insert', compact('message'));
        }
        $this->renderView('blog/insert');
    }
}
