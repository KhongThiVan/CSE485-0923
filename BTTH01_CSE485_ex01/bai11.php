<?php
$array = array(1, 2, 3, 4, 5);

// Xóa phần tử thứ 3
unset($array[2]);

// Cập nhật lại các key của mảng
$array = array_values($array);

// In ra màn hình kiểm tra
print_r($array);
?>