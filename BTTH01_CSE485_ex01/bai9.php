<?php
function chuyenKyTuThuong($arr) {
    $result = array_map('strtolower', $arr);
    return $result;
}

// Áp dụng với các mảng
$arr1 = ['a', 'b', 'ABC'];
$arr2 = ['1', 'B', 'C', 'E'];
$arr3 = ['a', 0, null, false];

$result1 = chuyenKyTuThuong($arr1);
$result2 = chuyenKyTuThuong($arr2);
$result3 = chuyenKyTuThuong($arr3);

// In ra màn hình kiểm tra
echo "Kết quả cho mảng 1: ";
print_r($result1);

echo "Kết quả cho mảng 2: ";
print_r($result2);

echo "Kết quả cho mảng 3: ";
print_r($result3);
?>