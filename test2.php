<!-- <!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ví dụ Form Tự Động Submit</title>
</head>
<body>

<form id="myForm">
  <label for="quantity">Số lượng:</label>
  <input type="number" id="quantity" name="quantity" min="1" value="1" onblur="checkAndSubmit()">
</form>

<script>
  var timeoutId;

  function checkAndSubmit() {
    // Hủy bỏ timeout nếu có
    clearTimeout(timeoutId);

    // Đặt timeout để chờ một khoảng thời gian trước khi tự động submit
    timeoutId = setTimeout(function() {
      // Lấy ra form
      var form = document.getElementById("myForm");

      // Tự động submit form
      form.submit();
    }, 100); // 500 milliseconds (0.5 seconds), bạn có thể điều chỉnh thời gian theo ý muốn
  }
</script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ví dụ Form Tự Động Cập Nhật</title>
</head>
<body>
<?php
  if (isset($_GET['quantity'])) {
    $quantity = $_GET['quantity'];
    echo '
      <input type="number" value="'.$quantity.'" id="">
    ';

  }
?>
<form id="myForm">
  <input type="number"  name="quantity" min="1" value="1" oninput="handleInput()">
  <input type="number"  name="quantity" min="1" value="1" oninput="handleInput()">
</form>

<script>
  var timeoutId;

  function handleInput() {
    // Hủy bỏ timeout nếu có
    clearTimeout(timeoutId);

    // Đặt timeout để chờ một khoảng thời gian trước khi tự động cập nhật
    timeoutId = setTimeout(function() {
      // Lấy ra form
      var form = document.getElementById("myForm");

      // Tự động submit form hoặc thực hiện các bước cập nhật khác
      form.submit();
    }, 500); // 500 milliseconds (0.5 seconds), bạn có thể điều chỉnh thời gian theo ý muốn
  }
</script>

</body>
</html>
