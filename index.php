<?php
//nhung ket noi csdl
include "dao/pdo.php";
include "dao/danhmuc.php";
include "dao/sanpham.php";
include "dao/sanphamtop.php";
include "dao/sale.php";


include "view/header.php";

// data danh cho trang chu
$sp_new = get_sp_new(4);
$sp_men = get_sp_men(1);
$sp_women = get_sp_women(2);
$sp_top = get_sp_top(4);
$sp_sale = get_sp_sale(4);

if (!isset($_GET['page'])) {
    include "view/home.php";
} else {
    switch ($_GET['page']) {
        case 'sanpham':
            $dsdm = danhmuc_all();

            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
            }
            $dssp = get_dssp($iddm, 6);

            include "view/sanpham.php";
            break;

        case 'sanphamchitiet':
            if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $spchitiet = get_spchitiet($id);
                $dsdm = danhmuc_all();
                $iddm = $spchitiet['iddm'];
                // $splienquan = get_splienquan($iddm, $id, 4);
                include "view/sanphamchitiet.php";
            } else {
                include "view/home.php";
            }


            break;

        default:
            include "view/home.php";
            break;
    }
}


include "view/footer.php";
