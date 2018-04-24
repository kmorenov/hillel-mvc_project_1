<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 20/04/18
 * Time: 4:15 AM
 */
require_once 'Connection.php';

class MainModel
{

    public function getData()
    {
        return $this->getDataFromDatabase();
    }

    private function getDataFromDatabase()
    {
        DEFINE("ROWS_PER_PAGE", 3);
        //echo '<br/>get Data From Database';
        $c = new Connection(HOST, USER, PASSWORD, DATABASE);

        $connect = $c->myconnect();

        $sql = "SELECT COUNT(*) AS 'rows' FROM news";
        $query = mysqli_query($connect, $sql);

        while ($res[] = mysqli_fetch_assoc($query)) {
            $news = $res;
        }

        $num_pages = ceil($news[0]['rows']/ROWS_PER_PAGE);

        $page = !empty($_GET['page']) ? $_GET['page'] : 1;

        $sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT " . ($page-1)* ROWS_PER_PAGE . "," . ROWS_PER_PAGE;
        $query = mysqli_query($connect, $sql);

        unset($res);
        while ($res[] = mysqli_fetch_assoc($query)) {
            $news = $res;
        }
        $arr["news"] = $news;
        $arr["num_pages"] = $num_pages;

        include_once 'views/news.php';
        return $arr;
    }
}