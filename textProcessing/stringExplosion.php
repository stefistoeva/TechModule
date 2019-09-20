<?php
$string = readline();
$bomb = 0;

for ($i = 0; $i < strlen($string); $i++) {
    if ($bomb > 0 && $string[$i] != '>') {
        $string = substr_replace($string, '', $i, 1);
        $bomb--;
        $i--;
    } else if ($string[$i] === '>') {
        $bomb += $string[$i + 1];
    }
}

echo $string . PHP_EOL;
