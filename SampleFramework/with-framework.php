<?php
include_once('micro-framework.php');

echo "Сегодня ".getCurrentDayOfTheWeek()."<br />";
echo "Текущий год - ".getLeapYearType()."<br />";
echo "С 1 января 1970 года прошло ".getFullDaysCountFrom1970Year()."<br />";