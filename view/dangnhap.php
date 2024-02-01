<div class="space-medium">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="account-holder">
                    <!--login-form-->
                    <h3>ĐĂNG NHẬP VÀO THỜI TRANG HÔM NAY</h3>
                    <br>
                    <div class="social-btn">
                        <h6>ĐĂNG NHẬP VỚI</h6>
                        <div class="fb-btn">
                            <i class="fa fa-facebook-official"></i><a href="#" class="fb-btn-text">facebook</a>
                        </div>
                        <div class="google-btn">
                            <i class="fa fa-google"></i><a href="#" class="google-btn-text">Google</a>
                        </div>
                    </div>
                    <div class="row">
                        <h2 style="color:red">
                            <?php
                            if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) echo $_SESSION['tb_dangnhap'];
                            ?>
                        </h2>
                        <form action="index.php?page=login" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
                                    <input id="email" name="email" type="text" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label required" for="password">Password<sup style="color:red">*</sup></label>
                                    <input id="password" name="password" type="password" class="form-control" placeholder="password">
                                </div>
                                <a href="#" class="forgot-password">Forgot Password?</a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" name="dangnhap">
                                <button type="submit" name="dangnhap" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--/.login-form-->
            <!--sing-up-form-->
        </div>
    </div>
</div>