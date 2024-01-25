<?php
$html_dm = showdm($dsdm);
$html_dssp = '';
foreach ($dssp as $sp) {
    extract($sp);
    $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
    $html_dssp .= '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Zima leto</a></h4>
                                <p class="product-text">Solid A-Line Dress</p>
                                <p class="product-price">' . $Gia . '</p>
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
// if ($title != "") $title = $title;
// else $title = "Sản Phẩm";
?>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="page-section">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#">Trang chủ</a></li>
                            <li>DANH SÁCH SẢN PHẨM</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <?= $html_dssp; ?>
                <!-- <div class="row">
                   
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh1.webp" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Zima leto</a></h4>
                                <p class="product-text">Solid A-Line Dress</p>
                                <p class="product-price">$50</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh1top.jpg" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Purple Feathers</a></h4>
                                <p class="product-text">Pencil Skirts</p>
                                <p class="product-price">$30</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh2.webp" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">puma</a></h4>
                                <p class="product-text">Women Regular Shorts</p>
                                <p class="product-price">$20</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh2top.jpg" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">puma</a></h4>
                                <p class="product-text">Women Regular Shorts</p>
                                <p class="product-price">$20</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh4.webp" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">sera</a></h4>
                                <p class="product-text">Printed Skirts</p>
                                <p class="product-price">$15</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh3.webp" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Evan</a></h4>
                                <p class="product-text">dress</p>
                                <p class="product-price">$18</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh3top.jpg" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Aks</a></h4>
                                <p class="product-text">Mini Skirt</p>
                                <p class="product-price">$17</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/anh4top.jpg" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Evan</a></h4>
                                <p class="product-text">dress</p>
                                <p class="product-price">$18</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/sale1.jpg" alt="" class="img-responsive"></a></div>
                            <div class="product-content">
                                <h4 class="product-title"><a href="#">Harpa</a></h4>
                                <p class="product-text">Printed Skirt</p>
                                <p class="product-price">$32</p>
                                <div class="product-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="st-pagination">
                        <ul class="pagination">
                            <li><a href="#" aria-label="previous"><span aria-hidden="true">Previous</span></a> </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li> <a href="#" aria-label="Next"><span aria-hidden="true">Next</span></a> </li>
                        </ul>
                    </div>
                </div>

            </div> -->
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- widget-search-start -->
                <div class=" widget widget-search">
                    <form>
                        <div class="search-form">
                            <input type="text" class="form-control" placeholder="Search Here">
                            <button type="Submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- widget-search-close -->
                <!-- widget-categories-start -->
                <div class=" widget widget-categories">
                    <h2 class="widget-title">Danh mục</h2>
                    <?= $html_dm; ?>
                    <!-- <ul class="angle angle-right">
                        <li><a href="#">Hàng top</a></li>
                        <li><a href="#">Tshirts (21)</a></li>
                        <li><a href="#">Shirts (16)</a></li>
                        <li><a href="#">Dresses (13)</a></li>
                        <li><a href="#">Jeans (12)</a></li>
                    </ul> -->
                </div>
                <!-- widget-categories-close -->
                <!-- widget-filter-start -->
                <!-- widget-filter-close -->
                <!-- widget-recent-product-start -->
                <div class="widget widget-recent-product">
                    <h2 class="widget-title">Recent Products</h2>
                    <!-- product-start-->
                    <div class="recent-product">
                        <div class="recent-product-img">
                            <img src="layout/images/ft-post-1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="recent-product-content">
                            <h4><a href="#" class="recent-product-title">Zima leto</a></h4>
                            <div class="recent-product-rating">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <div class="recent-product-price">$50</div>
                        </div>
                    </div>
                    <!-- product-close-->
                    <!-- product-start-->
                    <div class="recent-product">
                        <div class="recent-product-img">
                            <img src="layout/images/ft-post-2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="recent-product-content">
                            <h4><a href="#" class="recent-product-title">Puma</a></h4>
                            <div class="recent-product-rating">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <div class="recent-product-price">$30</div>
                        </div>
                    </div>
                    <!-- product-close-->
                    <!-- product-start-->
                    <div class="recent-product">
                        <div class="recent-product-img">
                            <img src="layout/images/ft-post-3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="recent-product-content">
                            <h4><a href="#" class="recent-product-title">Sera</a></h4>
                            <div class="recent-product-rating">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <div class="recent-product-price">$20</div>
                        </div>
                    </div>
                    <!-- product-close-->
                </div>
                <!-- widget-recent-post-close-->
            </div>
        </div>
    </div>
</div>
<!-- /.product-section-->