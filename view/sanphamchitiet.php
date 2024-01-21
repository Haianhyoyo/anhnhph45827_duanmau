<?php
$html_dm = showdm($dsdm);
extract($spchitiet);
// $html_sp_lienquan = showsp($splienquan);
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
                            <li>Sản Phẩm Chi Tiết</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page-header -->
<!-- product-single-->
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <!-- product-description-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="product-img mb30"><a href="#"><img src="layout/images/<?= $HinhAnh ?>" alt="" class="img-responsive"></a></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="product-single">
                            <h2><?= $TenSanPham ?></h2>
                            <p class="product-text">Plain Skirts</p>
                            <div class="product-rating">
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star"></i></span>
                                <span><i class="fa fa-star-o"></i></span>
                            </div>
                            <p class="product-price" style="font-size: 30px;"><?= $Gia ?></p>
                            <div class="product-line"></div>
                            <div class="product-quantity">
                                <div class="quantity">
                                    <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                </div>
                                <button type="submit" class="btn btn-primary">Add to cart</button>
                            </div>

                            <div class="product-social"> <a href="#"><span><i class="fa fa-facebook"></i></span></a> <a href="#"><span><i class="fa fa-google-plus"></i></span> </a> <a href="#"><span class="#"><i class="fa fa-twitter"></i> </span></a> <a href="#"><span><i class=" fa fa-pinterest"></i> </span></a> <a href="#"><span><i class="fa fa-linkedin"></i></span></a> </div>
                        </div>
                    </div>
                </div>
                <!-- /.product-description-->
                <!-- product-tab-->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="st-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-title-1" aria-controls="tab-title-1" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#tab-title-2" aria-controls="tab-title-2" role="tab" data-toggle="tab">Additional Information</a></li>
                                <li role="presentation"><a href="#tab-title-3" aria-controls="tab-title-3" role="tab" data-toggle="tab">Reviews (02)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab-title-1">
                                    <h3>Description</h3>
                                    <p>Pellentesque habitant morbi tristique senectuset netus etesenes malesuada fame turpis egesestibulum tortor quamfeugiat vitae on ultricies eget tempor sitametaonec eu libero sit amet quameser egestas semper. Aenean ultricies mi vitae est.irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatut occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab-title-2">
                                    <h3>Additional Information</h3>
                                    <table class="table table-striped ">
                                        <caption>
                                            Optional table caption.
                                        </caption>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Brands</th>
                                                <th>Evan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Manufacturer</td>
                                                <td>India</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Fit</td>
                                                <td>Summer</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Colors</td>
                                                <td>Blue</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Material</td>
                                                <td>Silk</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tab-title-3">
                                    <h3>Reviews</h3>
                                    <!--comments start-->
                                    <div class="comment-area">
                                        <div class="comment-title">
                                            <h3>(4)Comments</h3>
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="comment-author"> <img src="images/user-pic-1.jpg" alt="" class="img-responsive"> </div>
                                                    <div class="comment-info">
                                                        <div class="comment-header">
                                                            <h4>Maria Wynn</h4>
                                                            <div class="product-rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Curabieet sitamet purus sed vestibulu ullam cursus, lacus eget pharetraium dui sed dius natoque penatibus et magnis dis parturiet the iaculis etiam.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="comment-list">
                                                <li>
                                                    <div class="comment-author"><img src="images/user-pic-2.jpg" alt="" class="img-responsive"></div>
                                                    <div class="comment-info">
                                                        <div class="comment-header">
                                                            <h4>Ruby Simms</h4>
                                                            <div class="product-rating">
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star"></i></span>
                                                                <span><i class="fa fa-star-o"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-content">
                                                            <p>Proin purus diam, tristique quis pharetra et, pellentesque et jngilorem ipsum dolro sit amet psumellam hendrerit nibh eget sagittis hendrerit.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <br>
                                    <h3>Add A Review</h3>
                                    <p>YOUR RATING * &nbsp;
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star-o"></i></span>
                                    </p>
                                    <div class="row">
                                        <form>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="name">Name<sup style="color:red">*</sup></label>
                                                    <input id="name" type="text" class="form-control" placeholder="Name" required="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Email<sup style="color:red">*</sup></label>
                                                    <input id="email" type="text" class="form-control" placeholder="Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="textarea">Your Review</label>
                                                    <textarea class="form-control" id="textarea" name="textarea" rows="6" placeholder="Enter your Reviews"></textarea>
                                                </div>
                                                <button id="singlebutton" name="singlebutton" class="btn btn-primary btn-sm">Submit</button>
                                                <p style="color: red;margin-top: 20px; ">* required fields</p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product-tab-->
                    </div>
                </div>
                <br>
                <!-- product-list-->
                <h3>Sản phẩm liên quan</h3>
                <p>The best of global brands, at your doorstep!</p>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-block">
                            <div class="product-img"><a href="#"><img src="layout/images/men_lienquan1.webp" alt="" class="img-responsive"></a></div>
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
                            <div class="product-img"><a href="#"><img src="layout/images/men_lienquan2.webp" alt="" class="img-responsive"></a></div>
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
                            <div class="product-img"><a href="#"><img src="layout/images/men_lienquan3.webp" alt="" class="img-responsive"></a></div>
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
                <!-- widget-recent-post-start -->
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