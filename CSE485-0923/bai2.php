<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];
$nguoiYeuThich = ['Anh', 'Sơn', 'Thắng', 'tôi'];

// Sử dụng vòng lặp để tạo chuỗi
$chuoi = '';
for ($i = 0; $i < count($arrs); $i++) {
    $chuoi .= "Màu " . $arrs[$i] . " là màu yêu thích của " . $nguoiYeuThich[$i];
    if ($i < count($arrs) - 1) {
        $chuoi .= ', ';
    } else {
        $chuoi .= '.';
    }
}

echo $chuoi;
?>