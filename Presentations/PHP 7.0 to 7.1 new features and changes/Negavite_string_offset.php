<?php
$byteArray = "abcde";

echo substr("abcde", 1, 1) . ' ';
echo substr("abcde", -1, 1) . ' ';

echo "abcde"[1] . ' ' . PHP_EOL;
echo "abcde"[-2] . ' ';
echo "{$byteArray[-3]}" . ' ';