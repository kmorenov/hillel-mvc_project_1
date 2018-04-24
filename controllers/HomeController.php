<?php
require_once 'models/MainModel.php';

class HomeController
{
    public function index ()
    {
      //  echo 'Hello from index';
        $model = new MainModel();
        $news = $model->getdata();
        include_once 'views/news.php';
    }
}

$h = new HomeController();
call_user_func([$h, 'index']);

?>