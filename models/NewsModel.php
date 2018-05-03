<?php

class NewsModel
{

    public function getData()
    {
        return $this->getDataFromDatabases();
    }

    private function getDataFromDatabases()
    {
        require_once 'config.php';
        require_once 'models/Connection.php';
        $c = new Connection(HOST, USER, PASSWORD, DATABASE);
        $connect = $c->myconnect();

        $newsid = !empty($_GET['id']) ? $_GET['id'] : '';
        $sql = "SELECT * FROM news WHERE news_id=" . $newsid;
        $query = mysqli_query($connect, $sql);

        while ($res[] = mysqli_fetch_assoc($query))
        {
            $news = $res;
        }

        $sql = "SELECT category_id FROM category";
        $query = mysqli_query($connect, $sql);

        while ($res[] = mysqli_fetch_assoc($query)) {
            if ($res != null) {
                $category_id = $res;
            }
//            $arr = $res;
        }

        return $category_id; //$arr;
    }
}
?>