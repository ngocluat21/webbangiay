<style>
    td {
        padding: 20px;
    }
</style>
<table border="1">
    <?php foreach($loadcart as $cart) {
        extract($cart);
        echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$iduser.'</td>
                <td>'.$idspbt.'</td>
                <td>'.$img.'</td>
                <td>'.$namepro.'</td>
                <td>'.$mau.'</td>
                <td>'.$size.'</td>
                <td>'.$soluong.'</td>
                <td>'.$thanhtien.'</td>
                <td>'.$idbill.'</td>
            </tr>
        ';
    }
    ?>
</table>