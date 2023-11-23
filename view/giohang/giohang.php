        <div class="content">
            <?php foreach($_SESSION['mycart'] as $cart) {
                $img_path = "../upload/".$cart[1];
                echo '
                    <div class="cart">
                        <img src="'.$img_path.'" alt="">
                        <div class="cartinfo">
                            <h1>'.$cart[2].'</h1>
                            <div class="price">'.$cart[3].' đ</div>
                            <div class="option">
                                <span>MÀU: '.$cart[5].'</span><span>SIZE: '.$cart[6].'</span>
                            </div>
                            <div class="remote_ct quantity-container">
                                <button class="decrease"><i class="fa fa-minus"></i></button>
                                <input type="text" name="soluong" class="quantitybtn" value="1">
                                <button class="increase"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="icon_canxel">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                ';
            }
            ?>
           
            <div class="btn_action">
                <a href="#">
                    <input type="button" value="Xóa giỏ hàng">
                </a>
                <a href="index.html">
                    <input type="button" value="Tiếp tục mua hàng">
                </a>
                <a href="thanhtoan.html">
                    <input type="button" value="Mua ngay">
                </a>
            </div>
        </div>