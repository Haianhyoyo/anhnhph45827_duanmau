 <?php
    $html_sp_new = showsp($sp_new);
    $html_sp_men = showsp_men($sp_men);
    $html_sp_women = showsp_women($sp_women);
    $html_sp_top = showsp_top($sp_top);
    $html_sp_sale = showsp_sale($sp_sale);
    // $html_sp_men = '';
    // foreach ($sp_men as $sp) {
    //     extract($sp);
    //     $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
    //     $html_sp_men .= '<div class="row">

    //                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    //                             <div class="main-product mb30">
    //                                 <div><a href="' . $link . '" class="main-product-img imghover"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div> 
    //                                 <div class="product-caption">
    //                                     <h3><a href="#">men</a></h3>
    //                                 </div>
    //                             </div>
    //                         </div>';
    // }
    // $html_sp_women = '';
    // foreach ($sp_women as $sp) {
    //     extract($sp);
    //     $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
    //     $html_sp_women .=  '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    //                         <div class="main-product">
    //                             <div><a href="' . $link . '" class="main-product-img imghover"><img src="layout/images/' . $HinhAnh . '" alt="" class="img-responsive"></a></div>
    //                             <div class="product-caption">
    //                                 <h3><a href="#">women</a></h3>
    //                                 </div>
    //                             </div>
    //                         </div>

    //                     </div>';
    // }
    // $html_sp_top = '';
    // foreach ($sp_top as $sp) {
    //     extract($sp);
    //     $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
    //     $html_sp_top .= '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    //                         <div class="product-block">
    //                             <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $hinhanh . '" alt="" class="img-responsive"></a></div>
    //                             <div class="product-content">
    //                                 <h4 class="product-title"><a href="#">Zima leto</a></h4>
    //                                 <p class="product-text">Solid A-Line Dress</p>
    //                                 <p class="product-price">' . $gia . '</p>
    //                                 <div class="product-links">
    //                                     <ul>
    //                                         <li><a href="#"><i class="fa fa-heart"></i></a></li>
    //                                         <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
    //                                         </li>
    //                                     </ul>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                     </div>';
    // }
    // $html_sp_sale = '';
    // foreach ($sp_sale as $sp) {
    //     extract($sp);
    //     $link = "index.php?page=sanphamchitiet&idpro=" . $ID;
    //     $html_sp_sale .= '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
    //                             <div class="product-block">
    //                                 <div class="product-img"><a href="' . $link . '"><img src="layout/images/' . $hinhanh . '" alt="" class="img-responsive"></a></div>
    //                                 <div class="product-sale">
    //                                     <p>sale</p>
    //                                 </div>
    //                                 <div class="product-content">
    //                                     <h4 class="product-title"><a href="#">Mango</a></h4>
    //                                     <p class="product-text">Denim Shorts</p>
    //                                     <p class="product-price">' . $gia . '<s class="price-del">$250 </s> <span class="price-discount">(30% Off)</span></p>
    //                                     <div class="product-links">
    //                                         <ul>
    //                                             <li><a href="#"><i class="fa fa-heart"></i></a></li>
    //                                             <li><a href="#"><i class="fa fa-shopping-cart"></i></a>
    //                                             </li>
    //                                         </ul>
    //                                     </div>
    //                                 </div>
    //                             </div>
    //                         </div>';
    // }
    ?>
 <!-- slider-start -->
 <div class="">
     <!-- slider-1-start-->
     <div class="item">
         <div class="slider-img"> <img src="layout/images/banner.jpg" alt=""></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                     <div class="slider-captions">
                         <h1 class="slider-discount-title">GIẢM GIÁ 75%!</h1>
                         <h2 class="slider-title">XEM BỘ SƯU TẬP MỚI CỦA CHÚNG TÔI</h2>
                         <p class="slider-text hidden-xs">Những thương hiệu tốt nhất toàn cầu đang ở trước cửa nhà bạn!</p>
                         <a href="#" class="btn btn-primary hidden-sm hidden-xs">shop now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- slider-1-start-->

 <!-- slider-close -->
 <!-- product-categories-start -->
 <div class="space-medium">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="section-title">
                     <!-- section title start-->
                     <h2>CHỈ CÓ ĐIỀU TỐT NHẤT</h2>
                     <p>Các danh mục phổ biến mà mọi người đang mua sắm ngay bây giờ.</p>
                 </div>
                 <!-- /.section title start-->
             </div>
         </div>
         <?= $html_sp_men ?>
         <?= $html_sp_women ?>
         <!-- <div class="row">
             
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="main-product mb30">
                     <div><a href="#" class="main-product-img imghover"><img src="layout/images/men.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-caption">
                         <h3><a href="#">men</a></h3>
                     </div>
                 </div>
             </div>
            
             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="main-product">
                     <div><a href="#" class="main-product-img imghover"><img src="layout/images/women.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-caption">
                         <h3><a href="#">women</a></h3>
                     </div>
                 </div>
             </div>
             
         </div> -->
         <!-- Product-categories-close -->
         <!-- New Arrivals Products-start -->
         <hr class="mb80 mt100">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="section-title">
                     <!-- section title start-->
                     <h2>SẢN PHẨM MỚI ĐẾN</h2>
                     <p>Những thương hiệu tốt nhất toàn cầu đang ở trước cửa nhà bạn!</p>
                 </div>
                 <!-- /.section title start-->
             </div>
         </div>
         <?= $html_sp_new ?>
         <!-- <div class="row">
        
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/anh1.jpg" alt="" class="img-responsive"></a></div>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/anh2.webp" alt="" class="img-responsive"></a></div>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/anh3.webp" alt="" class="img-responsive"></a></div>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/anh4.webp" alt="" class="img-responsive"></a></div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">sera</a></h4>
                         <p class="product-text">Printed Skirts</p>
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
             </div> -->

     </div>
 </div>
 </div>
 <!-- New Arrivals Products-close -->
 <!-- Top Rated Products-start -->
 <div class="space-medium bg-light">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="section-title">

                     <h2>SẢN PHẨM ĐƯỢC ĐÁNH GIÁ HÀNG ĐẦU</h2>
                     <p>Những thương hiệu tốt nhất toàn cầu đang ở trước cửa nhà bạn!</p>
                 </div>

             </div>
         </div>
         <?= $html_sp_top; ?>
         <!-- <div class="row">
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/top-product-1.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Ether</a></h4>
                         <p class="product-text">traking suit</p>
                         <p class="product-price">$50</p>
                         <div class="product-rating">
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star-o"></i></span>
                         </div>
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
            
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/top-product-2.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Alba</a></h4>
                         <p class="product-text">Printed Shorts</p>
                         <p class="product-price">$30</p>
                         <div class="product-rating">
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star-o"></i></span>
                         </div>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/top-product-3.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Roadster</a></h4>
                         <p class="product-text">Trouser</p>
                         <p class="product-price">$20</p>
                         <div class="product-rating">
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star-o"></i></span>
                         </div>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/top-product-4.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Biba</a></h4>
                         <p class="product-text">Jeans</p>
                         <p class="product-price">$50</p>
                         <div class="product-rating">
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star"></i></span>
                             <span><i class="fa fa-star-o"></i></span>
                         </div>
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
             
         </div> -->
     </div>
 </div>
 <!-- Top Rated Products-close -->
 <!-- On sale Products-start -->
 <div class="space-medium">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="section-title">
                     <!-- section title start-->
                     <h2>SẢN PHẨM ĐANG GIẢM GIÁ</h2>
                     <p>Những thương hiệu tốt nhất toàn cầu đang ở trước cửa nhà bạn!</p>
                 </div>
                 <!-- /.section title start-->
             </div>
         </div>
         <?= $html_sp_sale; ?>
         <!-- <div class="row">
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/sale-product-1.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-sale">
                         <p>sale</p>
                     </div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Mango</a></h4>
                         <p class="product-text">Denim Shorts</p>
                         <p class="product-price">$50 <s class="price-del">$250 </s> <span class="price-discount">(30% Off)</span></p>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/sale-product-2.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-sale">
                         <p>sale</p>
                     </div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Rider</a></h4>
                         <p class="product-text">Pencil Skirt</p>
                         <p class="product-price">$30 <s class="price-del">$150</s> <span class="price-discount">(44% Off)</span></p>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/sale-product-3.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-sale">
                         <p>sale</p>
                     </div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Abeey Fashion</a></h4>
                         <p class="product-text">Red Dress</p>
                         <p class="product-price">$25 <s class="price-del">$70</s><span class="price-discount">(50% Off)</span></p>
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
             
             <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                 <div class="product-block">
                     <div class="product-img"><a href="#"><img src="layout/images/sale-product-4.jpg" alt="" class="img-responsive"></a></div>
                     <div class="product-sale">
                         <p>sale</p>
                     </div>
                     <div class="product-content">
                         <h4 class="product-title"><a href="#">Clair</a></h4>
                         <p class="product-text">Casual Shorts</p>
                         <p class="product-price">$40 <s class="price-del">$100</s><span class="price-discount">(60% Off)</span></p>
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
            
         </div> -->
     </div>
 </div>
 <!-- On sale Products-close -->
 <!-- cta-start -->
 <div class="cta-section">
     <div class="item">
         <div class="slider-img"> <img src="layout/images/banner-5.png" alt=""></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                     <div class="slider-captions">
                         <h1 class="cta-text">TẤT CẢ CÁC ƯU ĐÃI ĐỂ GIÀNH LẤY!</h1>
                         <h2 class="cta-title">TẬN HƯỞNG GIẢM GIÁ TỚI 75%</h2>
                         <p>Maecenas apharetra felisid malesuada diaivamus accumsan lorem.</p>
                         <a href="#" class="btn btn-primary btn-lg">shop now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- cta-close -->
 <!-- blog-start -->
 <div class="space-medium">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="section-title">
                     <!-- section title start-->
                     <h2>BLOG MỚI NHẤT</h2>
                     <p>Đọc các bài viết và lời khuyên của chuyên gia thời trang của chúng tôi hàng ngày..</p>
                 </div>
                 <!-- /.section title start-->
             </div>
         </div>
         <div class="row">
             <!-- /blog-post-start-->
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb30">
                 <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                         <div class="post-block">
                             <div class="post-content">
                                 <div class="meta"><span class="meta-date">20 August 2020</span></div>
                                 <h3><a href="#">TRENDs FOR MENS FASHION Season</a></h3>
                                 <p>Curabitur ligula estmenut lacus nealuficitur lectus tibulum semper nullaet seme.</p>
                                 <a href="#" class="btn btn-primary btn-sm">read more</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 nopl ">
                         <div class="post-img"><a href="#" class="imghover"><img src="layout/images/blog-post-1.jpg" alt="" class="img-responsive"></a></div>
                     </div>
                 </div>
             </div>
             <!-- /blog-post-close-->
             <!-- /blog-post-start-->
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                 <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nopr">
                         <div class="post-block">
                             <div class="post-content">
                                 <div class="meta"><span class="meta-date">20 August 2020</span></div>
                                 <h3><a href="#">WHAT TO WEAR in Summer Season</a></h3>
                                 <p>Sed auctorest a justo orre laore ellentesque eget emlla placerat tincidunt orciesete.</p>
                                 <a href="#" class="btn btn-primary btn-sm">read more</a>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12 nopl ">
                         <div class="post-img"><a href="#" class="imghover"><img src="layout/images/blog-post-2.jpg" alt="" class="img-responsive"></a></div>
                     </div>
                 </div>
             </div>
             <!-- /blog-post-close-->
         </div>
     </div>
 </div>
 <!-- blog-close -->