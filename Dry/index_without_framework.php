<html>
    <head>
        <title>Title</title>
    </head>
    <body>
        <h1>Dry example</h1>
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
        <div>
            <a href="#">Product title</a>
            <p>Some product description</p>
        </div>
        <div>
            <a href="#">Product title</a>
            <p>Some product description</p>
        </div>
        <div>
            <a href="#">Product title</a>
            <p>Some product description</p>
        </div>
        <div>
            <a href="#">Product title</a>
            <p>Some product description</p>
        </div>
        <div>
            <a href="#">Product title</a>
            <p>Some product description</p>
        </div>
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