        <div class="content">
            <div class="box_ct">
                <?php 
                    extract($sanpham); 
                    $hinh = "upload/";
                ?>
                <div class="box_img">
                    <img src="<?=$hinh.$img?>" alt="">
                </div>
                <div class="boxinfo">
                    <h1><?= $namepro?></h1>
                    <div class="price">
                        <div><?=$price?> đ</div>
                    </div>
                   
                    
                    <div class="color">
                        <span>Chọn color: </span>
                        <strong id="selectedColor"></strong>
                        <div class="chose_color" id="colorButtonsContainer"> <!-- Đặt ID tại đây -->
                            <?php 
                            $uniqueColors = array(); 
                            foreach($spbt as $bienthe) {
                                $color = $bienthe['mau'];
                                // var_dump($color);
                                // Kiểm tra xem color đã xuất hiện chưa
                                if (!in_array($color, $uniqueColors)) {
                                    $uniqueColors[] = $color; // Thêm color vào mảng để kiểm tra lần sau
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="size">
                        <span>Chọn size: </span>
                        <strong id="selectedSize"></strong>
                        <div class="chose_size" id="sizeButtonsContainer"> <!-- Đặt ID tại đây -->
                            <?php 
                            $uniqueSizes = array(); 
                            foreach($spbt as $bienthe) {
                                $size = $bienthe['size'];
                                // Kiểm tra xem size đã xuất hiện chưa
                                if (!in_array($size, $uniqueSizes)) {
                                    $uniqueSizes[] = $size; // Thêm size vào mảng để kiểm tra lần sau
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="boxaddcart">
                        <div class="quantity" id="result">
                            <span>Chọn số lượng: </span>
                            <strong id="displayQuantity">1</strong>
                        </div>
                        <div class="remote_ct">
                            <button onclick="decreaseQuantity()"><i class="fa fa-minus"></i></button>
                            <input type="text" name="soluong" id="quantity" value="1">
                            <button onclick="increaseQuantity()"><i class="fa fa-plus"></i></button>
                            <a class ="btn_gh_ct" href="giohang.html">
                                <input style="width: 200px;" type="button" value="Thêm vào giỏ hàng">
                            </a>
                            <a href="thanhtoan.html">
                                <input type="button" value="Mua ngay">
                            </a>
                        </div>
                            <div class="qua_bottom">Còn lại: <?php foreach($slbt as $sl){echo $sl['soluong'];}; ?> sản phẩm</div>
                    </div>
                </div>
            </div>
            <div class="h1ct float">
                <h1>Sản phẩm liên quan</h1>
            </div>
            <div class="kind_pro">
                <div class="productct">
                    <?php foreach ($sanphamcl as $sp) {
                        extract($sp);
                        echo '
                        <div class="box_pro">
                            <div class="img_pro">
                                <a href="sanphamct.html">
                                    <img src="'.$hinh.$img.'" alt="">
                                </a>
                            </div>
                            <div class="remote">
                                <a href="index.php?act=sanphamct">'.$namepro.'</a>
                                <div class="price">
                                    <p>'.$price.'<u>đ</u></p>
                                </div>
                                <a href="sanphamct.html">
                                    <input type="button" value="Thêm vào giỏ hàng">
                                </a>
                            </div>
                        </div>
                        
                        ';
                    }
                    ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Chuyển đổi dữ liệu PHP thành dữ liệu JavaScript
        const colorData = <?php echo json_encode(array_unique(array_column($spbt, 'mau'))); ?>;
        const sizeData = <?php echo json_encode(array_unique(array_column($spbt, 'size'))); ?>;

        const colorContainer = document.getElementById("colorButtonsContainer");
        const sizeContainer = document.getElementById("sizeButtonsContainer");

        function createButtons(container, data, selectedElement, clickCallback) {
            data.forEach(function(item) {
                const button = document.createElement("button");
                button.innerText = item;
                button.addEventListener("click", function() {
                    container.querySelectorAll("button").forEach(function(btn) {
                        btn.classList.remove("selected");
                    });

                    button.classList.add("selected");

                    selectedElement.innerText = item;
                    clickCallback(item);
                });
                container.appendChild(button);
            });
        }

        createButtons(colorContainer, colorData, document.getElementById("selectedColor"), function(selectedColor) {
            console.log("Selected color: " + selectedColor);
        });

        createButtons(sizeContainer, sizeData, document.getElementById("selectedSize"), function(selectedSize) {
            console.log("Selected size: " + selectedSize);
        });
    });
</script>



                    <!-- <div class="box_pro">
                        <div class="img_pro">
                            <a href="sanphamct.html">
                                <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                            </a>
                        </div>
                        <div class="remote">
                            <a href="sanphamct.html">Name</a>
                            <div class="price">
                                <p>10000<u>đ</u></p>
                            </div>
                            <a href="sanphamct.html">
                                <input type="button" value="Thêm vào giỏ hàng">
                            </a>
                        </div>
                    </div>
                    <div class="box_pro">
                        <div class="img_pro">
                            <a href="sanphamct.html">
                                <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                            </a>
                        </div>
                        <div class="remote">
                            <a href="sanphamct.html">Name</a>
                            <div class="price">
                                <p>10000<u>đ</u></p>
                            </div>
                            <a href="sanphamct.html">
                                <input type="button" value="Thêm vào giỏ hàng">
                            </a>
                        </div>
                    </div>
                    <div class="box_pro">
                        <div class="img_pro">
                            <a href="sanphamct.html">
                                <img src="assets/images/giay-adidas-galaxy-star-nam-den-trang-01-800x800.png" alt="">
                            </a>
                        </div>
                        <div class="remote">
                            <a href="sanphamct.html">Name</a>
                            <div class="price">
                                <p>10000<u>đ</u></p>
                            </div>
                            <a href="sanphamct.html">
                                <input type="button" value="Thêm vào giỏ hàng">
                            </a>
                        </div>
                    </div> -->
                  
                </div>
            </div>
        </div>