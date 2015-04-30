<?php
if (1) {
    define("PRODUCT_NAME","test");
} else {
    define("PRODUCT_NAME","second product");
}?>
<html>
    <head>
        <title>Title</title>
    </head>
    <body>
        <h1>Example</h1>
        <div class="pagination"><?php
        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int) $page;
        }

        for($i = 0; $i < 10; $i ++) {
            if ($page == $i) {
                echo sprintf("<a href='/?page=%d'>%d</a>", $i, $i);
            } else {
                echo sprintf("<span>%d</span>", $i, $i);
            }

        }
        ?></div>
        <?php echo '<div>';
        echo '<a href="#">';
        echo constant('PRODUCT_NAME');
        echo '</a>';
        echo '<p>Some product description</p>';
        echo '</div>';?>

        <?php echo '<div>';
        echo '<a href="#">';
        echo constant('PRODUCT_NAME');
        echo '</a>';
        echo '<p>Some product description</p>';
        echo '</div>';?>

        <?php echo '<div>';
        echo '<a href="#">';
        echo constant('PRODUCT_NAME');
        echo '</a>';
        echo '<p>Some product description</p>';
        echo '</div>';?>

        <?php echo '<div>';
        echo '<a href="#">';
        echo constant('PRODUCT_NAME');
        echo '</a>';
        echo '<p>Some product description</p>';
        echo '</div>';?>

        <?php echo '<div>';
        echo '<a href="#">';
        echo constant('PRODUCT_NAME');
        echo '</a>';
        echo '<p>Some product description</p>';
        echo '</div>';?>
        <div class="pagination"><?php
            $page = 1;
            if (isset($_GET['page'])) {
                $page = (int) $page;
            }

            for($i = 0; $i < 10; $i ++) {
                if ($page == $i) {
                    echo sprintf("<a href='/?page=%d'>%d</a>", $i, $i);
                } else {
                    echo sprintf("<span>%d</span>", $i, $i);
                }

            }
            ?></div>
    </body>
</html>