<?php
include_once('micro-framework.php');

echo "Сегодня ";
switch (date('w')) {
    case 0:
        echo 'Понедельник';
        break;
    case 1:
        echo 'Вторник';
        break;
    case 2:
        echo 'Среда';
        break;
    case 3:
        echo 'Четверг';
        break;
    case 4:
        echo 'Пятница';
        break;
    case 5:
        echo 'Суббота';
        break;
    case 6:
        echo 'Воскресенье';
        break;
}
echo "<br />";
echo "Текущий год - ";
if (date('Y') % 4 == 0) {
    echo 'високосный';
}
echo 'не високосный';
echo "<br />";
echo "Количество дней прошедших с 1 января 1970 года - ";
echo (int) (time() / 60 / 60 / 24);
echo "<br />";