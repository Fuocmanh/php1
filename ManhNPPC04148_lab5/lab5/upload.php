<!DOCTYPE html>
<html>

<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="myFile">
        <input type="submit" name="upload">
    </form>
    <br>
    <!-- <pre> -->
    <?php
    if (isset($_POST['upload'])) {
        $file = $_FILES['myFile']['tmp_name'];
        $path = "uploads/" . $_FILES['myFile']['name'];

        if (move_uploaded_file($file, $path)) {
            echo "Tải tập tin thành công";
        } else {
            echo "Tải tập tin thất bại";
        }
        // print_r($_FILES['myFile']);
    }
    ?>
    <!-- </pre> -->
</body>

</html>