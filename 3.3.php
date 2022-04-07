<?php
$first = readline();
$select = readline();
$second = readline();

$answer = $first . $select . $second . "=";
switch ($select) {
    case '+':
        $answer .= $first + $second;
        break;
    case '-':
        $answer .= $first - $second;
        break;
    case '*':
        $answer .= $first * $second;
        break;
    case '/':
        $answer .= $first / $second;
        break;
}
echo $answer . "\n";

