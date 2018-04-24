<?php

if (!empty($arr["news"])) {
    echo '<table class="table">';
    foreach ($arr["news"] as $key => $value) {
        echo '<td><a href="edit_news.php?id=' . $value['news_id'] . '">' . '<img src="' . $value["news_image"] .
            '" title=' . $value['category_id'] . ' height=200></a><br/>' .
            '<a href="edit_news.php?id=' . $value['news_id'] . '">' . $value['news_name'] . ': ' . $value['short_description'] . '</a></td>';
    }
    echo '</table>';
} else {
    echo "The 'news' table is empty";
}

if ($arr["num_pages"] > 1) {
    $cat = !empty($_GET['cat']) ? $_GET['cat'] : '';
    for ($i = 1; $i <= $arr["num_pages"]; $i++) {
        if (empty($cat)) {
            echo '<a href="/hillel/mvc_project_1/views/news.php?page=' . $i . '">Page ' . $i . '</a>    ';
        } else {
            echo '<a href="/hillel/mvc_project_1/views/news.php?page=' . $i . '&cat=' . $cat . '">Page ' . $i . '</a>    ';
        }
    }
}
