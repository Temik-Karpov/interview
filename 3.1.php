<?php

//Так как срок нужно указывать в месяцах, я взял месяц как 30 дней.

//Также не совсем ясно, что должна возвращать функция - доход или сумму вклада
function income($sum, $term, $per)
{
    return ($sum * ($term * 30) * $per) / (365 * 100);
}

echo income(100, 365, 15);