<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN</h1>
    </div>
    <div class="row frmcontent">
        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>USER</th>
                    <th>CHO SẢN PHẨM</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>TRẠNG THÁI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $anbl = "index.php?act=dsbl&id=" . $id;
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $id . '</td>
                            <td>' . $noidung . '</td>
                            <td>' . $username . '</td>
                            <td>' . $idpro . '</td>
                            <td>' . $ngaybinhluan . '</td>
                            <td>' . ($status_bl ? 'Active' : 'Block') . '</td>

                            <td>
                                <a href="' . $xoabl . '" style="float: left;"><input type="button" value="Xóa"></a>
                                <form class="formact" action="' . $anbl . '" method="post" style="float: left;">
                                    <input type="submit" value="' . ($status_bl ? 'Khóa' : 'Mở') . '" name="' . ($status_bl ? "block" : "active") . '">
                                </form>
                            </td>

                          </tr>';
                }
                
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="CHỌN TẤT CẢ">
            <input type="button" value="BỎ CHỌN TẤT CẢ">
            <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
        </div>
    </div>
</div>