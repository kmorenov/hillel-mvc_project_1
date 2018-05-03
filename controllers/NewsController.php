<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 2/05/18
 * Time: 4:01 AM
 */
include_once 'models/NewsModel.php';

class NewsController
{
    public function index()
    {
        $model = new NewsModel();
        $news = $model->getData();
        include_once 'views/edit_news.php';
    }
}

$c = new NewsController();
$c->index();