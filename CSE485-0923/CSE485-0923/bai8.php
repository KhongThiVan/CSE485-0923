<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = $minLength = strlen($array[0]);
$maxString = $minString = $array[0];

foreach ($array as $str) {
    $length = strlen($str);
    
    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $str;
    } elseif ($length < $minLength) {
        $minLength = $length;
        $minString = $str;
    }
}
echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength" . PHP_EOL;
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength" . PHP_EOL;
?>