<?php
include_once('micro-framework.php');

echo "Сегодня ".getCurrentDayOfTheWeek()."<br />";
echo "Текущий год - ".getLeapYearType()."<br />";
echo "Количество дней прошедших с 1 января 1970 года - ".getFullDaysCountFrom1970Year()." <br />";