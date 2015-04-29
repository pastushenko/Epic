<?php
function generatePagination()
{
    $page = 1;
    if (isset($_GET['page'])) {
        $page = (int) $page;
    }

    $content = '';
    for($i = 0; $i < 10; $i ++) {
        if ($page == $i) {
            $content .= sprintf("<a href='/?page=%d'>%d</a>", $i, $i);
        } else {
            $content .= sprintf("<span>%d</span>", $i, $i);
        }

    }

    return $content;
}