<?php
require_once 'models/HomeModel.php';

class HomeController
{
    public function index ()
    {
        $model = new HomeModel();
        $news = $model->getdata();
    }
}

$h = new HomeController();
call_user_func([$h, 'index']);

?>