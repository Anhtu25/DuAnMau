<div class="boxright">

    <div class="row2 mb">
        <div class="box_title">TÀI KHOẢN</div>
        <div class="box_content form_account">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <div class="row2 mb10">
                    <h4>Xin chào</h4><br>
                    <?= $user ?>
                </div>
                <div class="row2 mb10">
                    <li>
                        <a href="index.php?act=quenmk">Quên mật khẩu</a>
                    </li>
                    <li>
                        <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                        
                    </li>
                    <li>
                        <?php if ($role == 1) { ?>
                        <a href="admin/index.php">Đăng nhập Admin</a><br>
                        <?php } ?>
                    </li>
                    <li> 
                        <a href="index.php?act=dangxuat">Thoát</a>
                    </li>
                    
                </div>
            <?php
                        } else {
            ?>
                <form action="index.php?act=dangnhap" method="POST">
                    <div class="row2 mb10">
                        <li>Tên đăng nhập</li><br>
                        <input type="text" name="user" id="">
                    </div>
                    <div class="row2 mb10">
                        <li>Mật khẩu</li><br>
                        <input type="password" name="pass" id=""><br>
                    </div>
                    <div class="row2 mb10">
                        <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                    </div>
                    <div class="row2 mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                    </div>
                </form>



                <div class="row2 mb10">
                    <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li class="form_li"><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                </div>

            <?php } ?>




        </div>
    </div>
    <div class="row2 mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <ul>
                <?php
                foreach ($dsdm as $dm) {
                    extract($dm);

                    $linkdm = "index.php?act=sanpham&iddm=" . $id;
                    echo '<p><a href="' . $linkdm . '">' . $name . ' </a></p>';
                }
                ?>

            </ul>
        </div>
        <div class="box_search">
            <form action="index.php?act=sanpham" method="POST">
                <input type="text" id="" placeholder="Từ khóa tìm kiếm" name="keyword">
            </form>
        </div>
    </div>
    <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
    <div class="row2 mb">
        <div class="box_title">TOP 10 SẢN PHẨM</div>
        <div class="box_content">
            <?php
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id;
                $img = $img_path . $img;
                echo '<div class="selling_products" style="width:100%;">
                  <a href="' . $linksp . '"><img src="' . $img . '" alt="anh"></a>
                  <a href="' . $linksp . '">' . $name . '</a>
                </div>';
            }
            ?>

        </div>
    </div>
</div>