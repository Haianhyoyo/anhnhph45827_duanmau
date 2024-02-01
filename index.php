<?php
session_start();
ob_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = [];
}

//nhung ket noi csdl
include "dao/pdo.php";
include "dao/user.php";
include "dao/danhmuc.php";
include "dao/sanpham.php";
include "dao/sanphamtop.php";
include "dao/sale.php";
include "dao/giohang.php";


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

            // kiem tra  co phai form seach khong
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST["kyw"];
                // $title = "Kết quả tìm kiếm:" . $kyw;
            } else {
                $kyw = "";
                // $title = "";
            }

            $dssp = get_dssp($kyw, $iddm, 6);

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

        case 'addcart':
            if (isset($_POST["name"])) {
                $TenSanPham = $_POST["name"];
                $HinhAnh = $_POST["img"];
                $Gia = $_POST["price"];
                $SoLuong = $_POST["soluong"];
                $sp = array("name" => $TenSanPham, "img" => $HinhAnh, "price" => $Gia, "soluong" => $SoLuong);
                array_push($_SESSION["giohang"], $sp);
                // echo var_dump($_SESSION["giohang"]);
                header('location: index.php?page=viewcart');
            }
            // include 'view/addcart.php';
            break;


        case 'viewcart':
            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION['giohang']);
                header('location: index.php');
            } else {
                if (isset($_SESSION["giohang"])) {
                    $tongdonhang = get_tongdonhang();
                }
                $giatrivoucher = 0;
                if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                    $tongdonhang = $_POST['tongdonhang'];
                    $mavoucher = $_POST['mavoucher'];
                    // so sánh db để lấy giá trị về
                    $giatrivoucher = 10;
                }
                $thanhtoan = $tongdonhang - $giatrivoucher;
                include 'view/viewcart.php';
            }
            break;


        case 'adduser':
            // xác định giá trị đầu vào
            if (isset($_POST["dangky"])) {
                $username = $_POST["username"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                // xử lý
                user_insert($username, $phone,  $email, $password);
            }
            include 'view/dangky.php';
            break;
        case 'dangky':
            include 'view/dangky.php';
            break;


        case 'login':
            // input
            if (isset($_POST["dangnhap"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];

                // xl: kiem tra
                $checkuser = checkuser($email, $password);
                if ($checkuser > 0) {
                    $_SESSION["iduser"] = $checkuser;
                    header('location: index.php');
                } else {
                    $tb = "Tài khoản không tồn tại hoặc thông tin nhập sai";
                    $_SESSION['tb_dangnhap'] = $tb;
                    include 'view/dangnhap.php';
                    unset($_SESSION['tb_dangnhap']);
                    // header('location: index.php?page=dangnhap');
                }
                //out
            }
            break;
        case 'dangnhap':
            if (isset($_SESSION['tb_dangnhap'])) {
                unset($_SESSION['tb_dangnhap']);
            }
            include 'view/dangnhap.php';
            break;


        case 'gioithieu':
            include 'view/gioithieu.php';
            break;
        default:
            include "view/home.php";
            break;
    }
}


include "view/footer.php";
