<?php
/**
 * Created by PhpStorm.
 * User: pastushenko
 * Date: 28.04.15
 * Time: 23:47
 */

/**
 * Возвращает день недели
 * @return string
 */
function getCurrentDayOfTheWeek()
{
    switch (date('w')) {
        case 0:
            return 'Понедельник';
            break;
        case 1:
            return 'Вторник';
            break;
        case 2:
            return 'Среда';
            break;
        case 3:
            return 'Четверг';
            break;
        case 4:
            return 'Пятница';
            break;
        case 5:
            return 'Суббота';
            break;
        case 6:
            return 'Воскресенье';
            break;
    }
}

/**
 * @return bool
 */
function getLeapYearType()
{
    if (date('Y') % 4 == 0) {
        return 'високосный';
    }
    return 'не високосный';
}

/**
 * @return int
 */
function getFullDaysCountFrom1970Year()
{
    return (int) (time() / 60 / 60 / 24);
}