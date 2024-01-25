<?php
require_once 'pdo.php';

function get_sp_sale($limi)
{
    $sql = "SELECT * FROM sale ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function showsp_sale($sp_sale)
{
    $html_sp_sale = '';
    foreach ($sp_sale as $sp) {
        extract($sp);
        $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
        $html_sp_sale .= '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="product-block">
                                    <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $hinhanh . '" alt="" class="img-responsive"></a></div>
                                    <div class="product-sale">
                                        <p>sale</p>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="product-title"><a href="#">Mango</a></h4>
                                        <p class="product-text">Denim Shorts</p>
                                        <p class="product-price">' . $gia . '<s class="price-del">$250 </s> <span class="price-discount">(30% Off)</span></p>
                                        <div class="product-links">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>';
    }
    return $html_sp_sale;
}

// function get_dssp($iddm, $limi)
// {
//     $sql = "SELECT * FROM sanpham WHERE 1";
//     if ($iddm > 0) {
//         $sql .= " AND iddm= " . $iddm;
//     }
//     $sql .= " ORDER BY id DESC limit " . $limi;
//     return pdo_query($sql);
// }
