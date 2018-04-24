<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 31-Oct-17
 * Time: 20:39
 */
session_start();
//require_once '../models/Connection.php';
//
//$c = new Connection('localhost', 'root', '', 'project1');
//$connect = $c->myconnect();
echo 'EDIT NEWS';
exit;

$newsid = !empty($_GET['id']) ? $_GET['id'] : '';
$sql = "SELECT * FROM news WHERE news_id=" . $newsid;
$query = mysqli_query($connect, $sql);
//var_dump($sql);
//exit;

while ($res[] = mysqli_fetch_assoc($query)) {
    $news = $res;
}

//echo 'News ID: ' . $news[0]["news_id"] . '<br/>News Name: ' . $news[0]["news_name"] . '<br/>Short Description: ' . $news[0]["short_description"] .
    '<br/>Description: ' . $news[0]["description"] . '<br/>Date: ' . $news[0]["date"] . '<br/><img src="../../' . $news[0]["news_image"]
    . '"<br/><br/>Category ID: ' . $news[0]["category_id"];


$sql = "SELECT category_id FROM category";
$query = mysqli_query($connect, $sql);

while ($res[] = mysqli_fetch_assoc($query)) {
    $category_id = $res;
}
?>
<html>
<head>
    <title>Project 1</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <form action="update_news.php" method="post" class="form-horizontal col-md-10 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-2">News ID</label><div class="col-md-10">
                    <input type="text" readonly name="news_id" value="<?php echo $news[0]["news_id"]; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">News Name</label><div class="col-md-10">
                    <input type="text" name="news_name" value="<?php echo $news[0]["news_name"]; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Short Description</label><div class="col-md-10">
                    <input type="text" name="short_description" value="<?php echo $news[0]["short_description"]; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Description</label><div class="col-md-10">
                    <input type="text" name="description" value="<?php echo $news[0]["description"]; ?>" /></div>
            </div>
            <div class="form-group">
                <label class="col-md-2">Date</label><div class="col-md-10">
                    <input type="date" name="date" value="<?php echo $news[0]["date"]; ?>" /></div>
            </div>
                <input type="file" name="news_image" value="<?php echo $news[0]["news_image"] ?>" />
                <img src="../<?php echo $news[0]["news_image"] ?>">

            <div class="form-group">
                <label class="col-md-2">Category ID</label>
                    <div class="col-md-10">
                        <select name="category_id">
                            <?php

                            for($i=0; $i<count($category_id); $i++){?>

                                <option value="<?php echo $category_id[$i]['category_id']; ?>"
                                    <?php echo !empty($_SESSION['category_id']) && $_SESSION['category_id'] == $category_id[$i]['category_id']
                                        ? 'selected' : ''; ?> ><?php echo $category_id[$i]['category_id']; ?>
                                </option>

                            <?php } ?>

                        </select>
                    </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary col-md-2 col-md-offset-100" value="Update" />
            </div>
            </form>
        </div>
    </div>
</body>
</html>