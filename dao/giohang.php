<?php
function get_tongdonhang()
{
    $tong = 0;
    $i = 1;
    foreach ($_SESSION['giohang'] as $sp) {
        extract($sp);
        $TongTien = (int)$price * (int)$soluong;
        $tong += $TongTien;
    }
    return $tong;
}
