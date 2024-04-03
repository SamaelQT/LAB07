<?php
include_once "../controllers/c_mon_an.php"; 

$c_mon_an = new C_mon_an();

$mon_ans = $c_mon_an->Hien_thi_mon_an();

include_once "v_mon_an.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách món ăn</title>
    <link rel="stylesheet" type="text/css" href="../css/default.css">
</head>
<body>
    <h3>Món ăn</h3> <h4>Hồ Hữu Quang</h4>
    <div class="row">
        <?php foreach ($mon_ans as $mon) { ?>
        <div class="khung_mon">
            <img src="http://localhost/bt7/images/hinh_mon_an/<?php echo $mon->hinh?>" width="150px" height="120px" />
            <h4><?php echo $mon->ten_mon ?></h4>
            <p><?php echo $mon->noi_dung_tom_tat?></p>
            Giá: <?php echo $mon->don_gia?>
            <br>
            <a class="buy-button" href="../controllers/chi_tiet_mon_an.php?id">Chi tiết</a>

        </div>
        <?php } ?>
    </div>
</body>
</html>

