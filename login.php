<?php
    include 'php/server.php';

    if (isset($_SESSION['id'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ | ผลการเรียนนักเรียนไม่ผ่านเกณฑ์</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-sm-1 col-md-2">

            </div>
            <div class="col-10 col-sm-10 col-md-8">
                <div class="row my-3 fs-3">
                    <center>
                        <div class="my-2">
                            <img src="img/login.png" height="94px" width="94px">
                        </div>
                        เข้าสู่ระบบ
                    </center>
                </div>
                <div class="row">
                    <form action="php/login_db.php" method="post">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="username" class="forn-label">ชื่อบัญชี</label>
                                    <input type="text" name="username" class="form-control" required placeholder="กรอกชื่อบัญชี">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="forn-label">รหัสผ่าน</label>
                                    <input type="password" name="password" class="form-control" required placeholder="กรอกรหัสผ่าน">
                                </div>
                                <div class="mb-2">
                                    <button type="submit" class="btn btn-success w-100">เข้าสู่ระบบ</button>
                                </div>
                            </div>
                            <div class="card-footer">
                                <small>หากเข้าสู่ระบบไม่ได้กรุณาติดต่อแอดมิน</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-1 col-sm-1 col-md-2">

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>