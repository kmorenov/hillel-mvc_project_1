<?php
function myLink($id, $page)
{
    $qstr = 'index.php?id=' . $id . '&page=' . $page;
    return $qstr;
}

if (!empty($arr["news"])) {
    echo '<table class="table">';
    foreach ($arr["news"] as $key => $value) {
        echo '<td><a href="' . myLink( $value['news_id'], '') . '">' . '<img src="' . $value["news_image"] .
            '" title=' . $value['category_id'] . ' height=200></a><br/>' .
            '<a href="' . myLink( $value['news_id'], '') . '">' . $value['news_name'] . ': ' . $value['short_description'] . '</a></td>';
    }
    echo '</table>';
} else {
    echo "The 'news' table is empty";
}

if ($arr["num_pages"] > 1) {
    for ($i = 1; $i <= $arr["num_pages"]; $i++) {
        echo '<a href="' . myLink('', $i) . '">Page ' . $i . '</a>    ';
    }
}