<div id="variantsContainer" class="frmcontent">
    <?php foreach ($list_spbt as $spbt) { ?>
        <div class="variant grid3 raw">
            <div class="mb10">
                <label for="size">Size:</label>
                <select name="idsize">
                    <option value="Choose">--- Chọn size ---</option>
                    <?php
                        foreach ($list_s as $size) {
                            extract($size);
                            $selected = ($spbt['idsize'] == $id) ? 'selected' : '';
                            echo '<option value="'.$id.'" '.$selected.'>'.$size.'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="mb10">
                <label for="color">Màu:</label>
                <select name="idmau">
                    <option value="Choose">--- Chọn màu ---</option>
                    <?php
                        foreach ($list_m as $mau) {
                            extract($mau);
                            $selected = ($spbt['idmau'] == $id) ? 'selected' : '';
                            echo '<option value="'.$id.'" '.$selected.'>'.$mau.'</option>';
                        }
                    ?>
                </select>
            </div>

            <div class="mb10">
                <label for="">Số Lượng:</label>
                <input type="text" name="soluong" value="<?= $spbt['soluong'] ?>">
            </div>
            <div class="mb10 flxend">
                <input type="button" onclick="removeVariant(this)" value="Xóa">
                <input type="button" onclick="addVariant()" value="Thêm Biến Thể">
            </div>
        </div>
        
    <?php } ?>
</div>