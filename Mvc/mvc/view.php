<html>
<head>
    <title>Title</title>
</head>
<body>
<h1>Page with mvc example</h1>
<h2><?php echo $pageTitle;?></h2>
<?php if (!count($products)): ?>
    <h3>There are no products in database.</h3>
<?php else: ?>
    <?php foreach ($products as $product):?>
        <div>
            <a href="/product/<?php echo $product['id'];?>"><?php echo $product['title'];?></a>
            <p><?php echo $product['description'];?></p>
        </div><br />
    <?php endforeach;?>
<?php endif;?>
</body>
</html>