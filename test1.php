<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Thêm thư viện FontAwesome cho biểu tượng -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="content" style="min-height: 450px">
        <?php 
            session_start();
            $ct = 0;
            foreach($_SESSION['mycart'] as $cart) {
                $img_path = "upload/".$cart[1];
                echo '
                    <div class="cart">
                        <img src="' . $img_path . '" alt="">
                        <div class="cartinfo">
                            <h1>' . $cart[2] . '</h1>
                            <div class="price">' . $cart[3] . ' đ</div>
                            <div class="option">
                                <span>MÀU: ' . $cart[5] . '</span><span>SIZE: ' . $cart[6] . '</span>
                            </div>
                            
                            <form action="index.php?act=updategiohang" method="post" oninput="updateQuantity(this.soluong.value)">
                                <input type="hidden" name="soluongmoi" id="amount-hidden" value="1">
                                <strong style="display: none;" id="displayQuantity"></strong>
                                
                                <div class="remote_ct quantity-container">
                                    <button class="decrease"><i class="fa fa-minus"></i></button>
                                    <input type="number" name="soluong" class="quantitybtn" value="'. $cart[7] .'">
                                    <button class="increase"><i class="fa fa-plus"></i></button>
                                </div>
                                
                                <!-- Thêm một nút submit để gửi biểu mẫu -->
                                <button type="submit" style="display: none;" id="submitButton"></button>
                            </form>
                            
                            <div class="icon_canxel">
                                <a href="index.php?act=delcart&idcart='.($ct).'"><i class="fa fa-xmark"></i></a>
                            </div>
                        </div>
                    </div>
                ';
                $ct += 1;
            }
        ?>

        <!-- Các nút hành động -->
        <?php
            if ($_SESSION['mycart'] == []) {
                echo '
                    <div class="h2cter">
                        <h2 class="thongbao">Chưa có sản phẩm nào trong giỏ hàng</h2>
                        <div class="btn_action">
                            <a href="index.php">
                                <input type="button" value="Tiếp tục mua hàng">
                            </a>
                        </div>
                    </div>
                ';
            } else {
                echo '
                    <div class="btn_action">
                        <a href="index.php?act=delall">
                            <input type="button" value="Xóa giỏ hàng">
                        </a>
                        <a href="index.php">
                            <input type="button" value="Tiếp tục mua hàng">
                        </a>
                        <a href="index.php?act=thanhtoan">
                            <input type="button" value="Mua ngay">
                        </a>
                    </div>
                ';
            }
        ?>
    </div>

    <!-- Đoạn mã script -->
    <script>
        function updateQuantity(value) {
            console.log("Giá trị mới:", value);
            var displayQuantity = document.getElementById("displayQuantity");
            if (displayQuantity) {
                displayQuantity.innerText = value;
                // Gọi hàm submitForm để gửi biểu mẫu khi có sự thay đổi
                submitForm();
            }
        }

        function submitForm() {
            // Gửi biểu mẫu khi có sự thay đổi
            var submitButton = document.getElementById("submitButton");
            if (submitButton) {
                submitButton.click();
            }
        }
    </script>
</body>
</html>
