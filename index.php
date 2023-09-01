<?php
    include 'php/server.php';

    if (!isset($_SESSION['id'])) {
        echo "<script>alert('กรุณาเข้าสู่ระบบก่อนค่ะ'); window.location = 'login.php'</script>";
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        echo "<script>alert('ออกจากระบบสำเร็จ'); window.location = 'login.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการเรียนนักเรียนไม่ผ่านเกณฑ์</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="row my-5">
        <div class="col-1 col-sm-1 col-md-3">

        </div>
        <div class="col-10 col-sm-10 col-md-6">
            <div class="row mb-4">
                <div class="justify-content-center">
                    <a href="add_student.php" style="text-decoration: none;">
                        <div class="d-flex card">
                            <div class="card-body">
                                <div class="d-inline-flex align-items-center">
                                    <div>
                                        <img src="img/add.png" width="70px" height="70px">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        เพิ่มข้อมูลนักเรียนที่มีผลการเรียนไม่ผ่านเกณฑ์
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-1 col-sm-1 col-md-3">

        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>