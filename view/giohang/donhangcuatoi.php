        <div class="content_trangchu_sp">
            <div class="title">
                <p>THÔNG TIN ĐƠN HÀNG</p>
            </div>
            <div class="table">
                <table>
                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG MẶT HÀNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th></th>
                    </tr>
                    <?php foreach($loadallbill as $bill) {
                        extract($bill);
                        $tddh = get_ttdh($bill_status);
                        echo '
                            <tr>
                                <td>DA1 - '.$bill['id'].'</td>
                                <td>'.$ngaydathang.'</td>
                                <td>'.$soluong.'</td>
                                <td>'.format($total).' </td>
                                <td>'.$tddh.'</td>
                                <td><a href="index.php?act=order&idbill='.$bill['id'].'"><input type="button" value="Chi tiết" style="cursor: pointer;"></a></td>
                            </tr>
                        ';
                    }
                    ?>
                </table>
            </div>
        </div>