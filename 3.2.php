<?php
function da($day, $month)
{
    $months = ["января", "февраля", "марта", "апреля", "мая", "июня", "июля",
        "августа", "сентября", "октября", "ноября", "декабря"];
    return $day . " " . $months[$month - 1];
}

$date = da(25, 12);
echo $date;