<?php
require_once 'pdo.php';

function get_sp_top($limi)
{
    $sql = "SELECT * FROM sanphamtop ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}

function showsp_top($sp_top)
{
    $html_sp_top = '';
    foreach ($sp_top as $sp) {
        extract($sp);
        $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
        $html_sp_top .= '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="product-block">
                                <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $hinhanh . '" alt="" class="img-responsive"></a></div>
                                <div class="product-content">
                                    <h4 class="product-title"><a href="#">Zima leto</a></h4>
                                    <p class="product-text">Solid A-Line Dress</p>
                                    <p class="product-price">' . $gia . '</p>
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
    return $html_sp_top;
}
