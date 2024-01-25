<?php
require_once 'pdo.php';

// function hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, dac_biet, so_luot_xem, ngay_nhap, mo_ta) VALUES (?,?,?,?,?,?,?,?,?)";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta);
// }

// function hang_hoa_update($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet, $so_luot_xem, $ngay_nhap, $mo_ta){
//     $sql = "UPDATE hang_hoa SET ten_hh=?,don_gia=?,giam_gia=?,hinh=?,ma_loai=?,dac_biet=?,so_luot_xem=?,ngay_nhap=?,mo_ta=? WHERE ma_hh=?";
//     pdo_execute($sql, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $dac_biet==1, $so_luot_xem, $ngay_nhap, $mo_ta, $ma_hh);
// }

// function hang_hoa_delete($ma_hh){
//     $sql = "DELETE FROM hang_hoa WHERE  ma_hh=?";
//     if(is_array($ma_hh)){
//         foreach ($ma_hh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_hh);
//     }
// }

function get_sp_new($limi)
{
    $sql = "SELECT * FROM sanpham WHERE bestseller=0 ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}
function get_sp_men($limi)
{
    $sql = "SELECT * FROM sanpham WHERE bestseller=1 ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}
function get_sp_women($limi)
{
    $sql = "SELECT * FROM sanpham WHERE bestseller=2 ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}
function get_dssp($kyw, $iddm, $limi)
{
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($iddm > 0) {
        $sql .= " AND iddm= " . $iddm;
    }
    if ($kyw != "") {
        $sql .= " AND TenSanPham like '%" . $kyw . "%'";
    }
    $sql .= " ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function get_spchitiet($id)
{
    $sql = "SELECT * FROM sanpham WHERE id=?";
    return pdo_query_one($sql, $id);
}

// function get_splienquan($iddm, $id, $limi)
// {
//     $sql = "SELECT * FROM sanpham WHERE iddm=? AND id<>? ORDER BY id DESC limit " . $limi;
//     return pdo_query_one($sql, $iddm, $id);
// }

function showsp($sp_new)
{
    $html_sp_new = '';
    if ($sp_new == true) {
        foreach ($sp_new as $sp) {
            extract($sp);
            $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
            $html_sp_new .= '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div>
                                <div class="product-content">
                                    <h4 class="product-title"><a href="#">' . $TenSanPham . '</a></h4>
                                    <p class="product-text">Solid A-Line Dress</p>
                                    <p class="product-price">' . $Gia . '</p>
                                    <form action="index.php?page=addcart" method="post">
                                            <input type="hidden" name="name" value="' . $TenSanPham . '">
                                            <input type="hidden" name="img" value="' . $HinhAnh . '">
                                            <input type="hidden" name="price" value="' . $Gia . '">
                                            <input type="hidden" name="soluong" value="1">
                                        <div class="product-links">
                                            <ul>
                                            <button type="submit" name="addcart">
                                                <li><a href="index.php?page=addcart"><i class="fa fa-shopping-cart"></i></a></li>
                                            </button>
                                            </ul>
                                        </div>
                                    </form>
                                   
                                </div>
                            </div>
                        </div>';
        }
    }
    return $html_sp_new;
}

function showsp_men($sp_men)
{
    $html_sp_men = '';
    foreach ($sp_men as $sp) {
        extract($sp);
        $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
        $html_sp_men .= '<div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="main-product mb30">
                                    <div><a href="' . $link . '" class="main-product-img imghover"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div> 
                                    <div class="product-caption">
                                        <h3><a href="#">men</a></h3>
                                    </div>
                                </div>
                            </div>';
    }
    return  $html_sp_men;
}

function showsp_women($sp_women)
{
    $html_sp_women = '';
    foreach ($sp_women as $sp) {
        extract($sp);
        $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
        $html_sp_women .=  '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="main-product">
                                <div><a href="' . $link . '" class="main-product-img imghover"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div>
                                <div class="product-caption">
                                    <h3><a href="#">women</a></h3>
                                    </div>
                                </div>
                            </div>

                        </div>';
    }
    return $html_sp_women;
}


// function hang_hoa_exist($ma_hh){
//     $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
//     return pdo_query_value($sql, $ma_hh) > 0;
// }

// function hang_hoa_tang_so_luot_xem($ma_hh){
//     $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
//     pdo_execute($sql, $ma_hh);
// }

// function hang_hoa_select_top10(){
//     $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
//     return pdo_query($sql);
// }

// function hang_hoa_select_dac_biet(){
//     $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
//     return pdo_query($sql);
// }

// function hang_hoa_select_by_loai($ma_loai){
//     $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
//     return pdo_query($sql, $ma_loai);
// }

// function hang_hoa_select_keyword($keyword){
//     $sql = "SELECT * FROM hang_hoa hh "
//             . " JOIN loai lo ON lo.ma_loai=hh.ma_loai "
//             . " WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
//     return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
// }

// function hang_hoa_select_page(){
//     if(!isset($_SESSION['page_no'])){
//         $_SESSION['page_no'] = 0;
//     }
//     if(!isset($_SESSION['page_count'])){
//         $row_count = pdo_query_value("SELECT count(*) FROM hang_hoa");
//         $_SESSION['page_count'] = ceil($row_count/10.0);
//     }
//     if(exist_param("page_no")){
//         $_SESSION['page_no'] = $_REQUEST['page_no'];
//     }
//     if($_SESSION['page_no'] < 0){
//         $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
//     }
//     if($_SESSION['page_no'] >= $_SESSION['page_count']){
//         $_SESSION['page_no'] = 0;
//     }
//     $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$_SESSION['page_no'].", 10";
//     return pdo_query($sql);
// }