<?php
$html_cart = '';
$i = 1;
foreach ($_SESSION['giohang'] as $sp) {
    extract($sp);
    $TongTien = (int)$price * (int)$soluong;
    $html_cart .= '<tr>
                        <th>' . $i . '</th>
                        <td><img src="layout/images/' . $img . '" alt="" class="img-responsive" style="width: 200x;"></td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>' . $soluong . '</td>
                        <td>' . $TongTien . '</td>
                        <td><a href="#"> Xóa </a></td>
                    </tr>';
    $i++;
}
?>
<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <h2 class="section-title">Giỏ Hàng</h2>
                <!-- cart-table-section -->
                <div class="table-responsive">
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>
                                    <h5>Stt</h5>
                                </th>
                                <th>
                                    <h5>Ảnh</h5>
                                </th>
                                <th>
                                    <h5>Sản Phẩm</h5>
                                </th>
                                <th>
                                    <h5>Giá</h5>
                                </th>
                                <th>
                                    <h5>Số Lượng</h5>
                                </th>
                                <th>
                                    <h5>Thành Tiền</h5>
                                </th>
                                <th>
                                    <h5>Thao tác</h5>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $html_cart; ?>
                            <!-- <tr>
                                <th scope="row">X</th>
                                <td><img src="./images/cart-product.jpg" alt="" class="img-responsive"></td>
                                <td>Evan</td>
                                <td>$10.00</td>
                                <td>
                                    <div class="product-quantity">
                                        <div class="quantity">
                                            <input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                        </div>
                                    </div>
                                </td>
                                <td>$30.00</td>
                            </tr> -->
                        </tbody>
                    </table>
                    <a href="index.php?page=viewcart&del=1">
                        <input type="submit" class="btn btn-primary" name="apply_coupon" value="Xóa rỗng giỏ hàng">
                    </a>
                    <!-- /.cart-table-section -->
                </div>
                <hr>
                <!-- coupon-section -->
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <form>
                            <div class="coupon-form">

                                <form action="index.php?page=viewcart&voucher=1" method="post">
                                    <input type="hidden" name="tongdonhang" value="<?= $tongdonhang ?>">
                                    <input type="text" name="mavoucher" value="" placeholder="Mã phiếu giảm giá">
                                    <!-- <input type="submit" class="btn btn-primary" name="apply_coupon" value="Áp dụng"> -->
                                    <button type="submit">Áp dụng</button>
                                </form>

                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="#" class="btn btn-default">update cart</a>
                    </div>
                </div>
            </div>
            <!-- /.coupon-section -->
            <!-- cart-total -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div>
                    <h3 class="section-title">Tổng giỏ hàng</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered mb20">
                            <tbody>
                                <tr>
                                    <th>
                                        <h5>Tổng số tiền đơn</h5>
                                    </th>
                                    <td><?= $tongdonhang ?></td>
                                </tr>
                                <tr>
                                    <th>
                                        <h5>Tổng thanh toán</h5>
                                    </th>
                                    <td><?= $thanhtoan; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button class="btn btn-primary btn-block">Proceed To Checkout</button>
                </div>
            </div>
            <!-- /.cart-total -->
        </div>
    </div>
</div>