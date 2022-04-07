<?php
function clock($hour, $minute)
{
    $ans = abs(($hour * 30 + $minute * 0.5) - ($minute * 6));
    return min(360-$ans, $ans);
}

echo clock(12, 15);
