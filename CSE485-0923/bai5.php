<?php
$a = [
    'a' => [
    'b' => 0,
    'c' => 1
    ],
    'b' => [
    'e' => 2,
    'o' => [
    'b' => 3
    ]
    ]
   ];
   
   // Lấy giá trị có key 'b' là 3
   $giaTriB = $a['b']['o']['b'];
   
   // Lấy giá trị có key 'c' là 1
   $giaTriC = $a['a']['c'];
   
   echo "Giá trị của 'b' là: " . $giaTriB . "\n";
   echo "Giá trị của 'c' là: " . $giaTriC . "\n";
   $thongTinA = $a['a'];

echo "Thông tin của 'a': \n";
print_r($thongTinA);
?>
