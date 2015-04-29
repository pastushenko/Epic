<html>
    <head>
        <title>Title</title>
    </head>
    <body>
<?php
$dbName = 'epic_skills';
$dbUser = 'epic_skills_user';
$dbPassword = 'epic_skills_password';
$dbHost = 'localhost';
$connection = mysqli_connect($dbHost, $dbUser, $dbPassword);
mysqli_select_db($connection, $dbName);

if (time() % 2) {
    $query = 'SELECT `title` FROM `page` WHERE `alias` = "index" LIMIT 1;';
    $result = mysqli_query($connection, $query);
} else {
    $query = 'SELECT `title` FROM `page` WHERE `alias` = "index2" LIMIT 1;';
    $result = mysqli_query($connection, $query);
}
?>
<h1>Page without mvc example</h1>
<h2>
    <?php
        $pageData = mysqli_fetch_array($result);
        echo $pageData['title'];
    ?>
</h2>
<?php
$query = 'SELECT `id`, `title`, `description` FROM `product`';
$results = mysqli_query($connection, $query);
if (!mysqli_num_rows($results)) {
    echo "<h3>There are no products in database.</h3>";
} else {
    foreach ($results as $product) {
        ?>
        <div>
            <a href="/product/<?php echo $product['id'];?>"><?php echo $product['title'];?></a>
            <p><?php echo $product['description'];?></p>
        </div>
        <br />
        <?php
    }
}
?>
</body>
</html>