<?php
require_once "../models/database.php";
$database = new Database();

$query = "SELECT * FROM mon_an WHERE ma_mon = ?";
$database->setQuery($query);
$mon_an = $database->loadRow([1]); 

if($mon_an) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết món ăn</title>
    <link rel="stylesheet" type="text/css" href="../css/default1.css">
</head>
<body>
    <h3>Chi tiết món ăn</h3>
    <div class="chi_tiet_mon_an">
        <h4><?php echo $mon_an->ten_mon ?></h4>
        <img src="../images/hinh_mon_an/<?php echo $mon_an->hinh ?>" width="200px" height="150px" />
        <p><?php echo $mon_an->noi_dung_chi_tiet ?></p>
        <p>Giá: <?php echo $mon_an->don_gia ?></p>
        <button class="buy-button" onclick="alert('Chức năng mua hàng chưa được triển khai')">Mua hàng</button>
    </div>
</body>
</html>
<?php
} else {
    echo "Không tìm thấy món ăn!";
}
?> 