<!DOCTYPE html>
<html>
<head>
    <title>Chia hai số</title>
</head>
<body>
    <h1>Chương trình chia hai số</h1>
    <form method="post">
        Số thứ nhất: <input type="number" name="num1" required><br><br>
        Số thứ hai: <input type="number" name="num2" required><br><br>
        <input type="submit" name="submit" value="Chia">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num2 == 0) {
            echo "Không thể chia cho 0.";
        } else {
            $result = $num1 / $num2;
            echo "Kết quả của $num1 chia cho $num2 là: $result";
        }
    }
    ?>
</body>
</html>
